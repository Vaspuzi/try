<?php

function change_password($user_id, $password){
	$user_id = (int)$user_id;
	$password = md5($password);

	mysql_query("UPDATE `users` SET `password` = '$password' WHERE `user_id` = $user_id ");
}


function login_admin($username, $password){
	$user_id = user_id_from_username($username);
	$username = sanitize($username);
	$password = md5($password);

	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username`= '$username' AND `password` = '$password' AND `access_level` = 1");

	if (mysql_result($query, 0) == 1) {
		return $user_id;

	}else {

		return false;
	}

}



function register_bus($register_bus_data){
	array_walk($register_bus_data, 'array_sanitize');

	$fields = '`' .implode('`, `', array_keys($register_bus_data)). '`';
	$data = '\'' .implode('\', \'', $register_bus_data). '\'';

	

	mysql_query("INSERT INTO `buses` ($fields) VALUES ($data)");
	
}

function register_staff($register_staff_data){
	array_walk($register_staff_data, 'array_sanitize');
	$register_staff_data['staff_password'] = md5($register_staff_data['staff_password']);

	$fields = '`' .implode('`, `', array_keys($register_staff_data)). '`';
	$data = '\'' .implode('\', \'', $register_staff_data). '\'';

	

	mysql_query("INSERT INTO `staff` ($fields) VALUES ($data)");
	
}


function update_staff($update_staff_data){
	$update = array();
	array_walk($update_staff_data, 'array_sanitize')	;

	foreach ($update_staff_data as $field => $data) {
		$update[] = '`' . $field . '`=\'' . $data . '\'';
	}

	mysql_query("UPDATE `staff` SET " . implode(', ', $update)  . "WHERE `status` =1");
}




function user_data($user_id){
    $data = array();
	$user_id = (int)$user_id;

	$func_num_args = func_num_args();
	$func_get_args = func_get_args();

	if ($func_num_args > 1) {
		unset($func_get_args[0]);

		$fields =  '`' .implode('`, `', $func_get_args). '`';
        
        
		
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `user_id` = $user_id"));
        return $data;


	}


}

function bus_exists($bus_id){
	$bus_id = sanitize($bus_id);
	$query = mysql_query("SELECT COUNT(`bus_details_id`) FROM `buses` WHERE `bus_id`='$bus_id'");
	if (mysql_result($query, 0) == 1) {
		return true;

	}else {
		return false;
	}

}

function book_user($book_data){
	array_walk($book_data, 'array_sanitize');

	$fields = '`' .implode('`, `', array_keys($book_data)). '`';
	$data = '\'' .implode('\', \'', $book_data). '\'';

	

	mysql_query("INSERT INTO `book_users` ($fields) VALUES ($data)");
	
}

function register_user($register_data){
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = md5($register_data['password']);

	$fields = '`' .implode('`, `', array_keys($register_data)). '`';
	$data = '\'' .implode('\', \'', $register_data). '\'';

	

	mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
	
}

function user_id_from_staff($staff_id){
	$staff_id = sanitize($staff_id);
    $query = mysql_query("SELECT `id` FROM `staff` WHERE `staff_id`= '$staff_id'");
	return mysql_result($query, 0, 'id');
}

function staff_exists($staff_id){
	$staff_id = sanitize($staff_id);
	$query = mysql_query("SELECT COUNT(`id`) FROM `staff` WHERE `staff_id`='$staff_id'");
	if (mysql_result($query, 0) == 1) {
		return true;

	}else {
		return false;
	}

}

function staff_login($staff_id, $staff_password){
	$id = user_id_from_staff($staff_id);
	$staff_id = sanitize($staff_id);
	$staff_password = md5($staff_password);

	$query1 = mysql_query("SELECT COUNT(`id`) FROM `staff` WHERE `staff_id`= '$staff_id' AND `staff_password` = '$staff_password'");

	if (mysql_result($query1, 0) == 1) {
		return $id;

	}else {

		return false;
	}

}


function logged_in(){
    
	if (isset($_SESSION['user_id'])){
        
		return true;
        
	} else{
        
		return false;
	}
}



function user_id_from_username($username){
	$username = sanitize($username);
    $query = mysql_query("SELECT `user_id` FROM `users` WHERE `username`= '$username'");
	return mysql_result($query, 0, 'user_id');
}




function user_exists($username){
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username`='$username'");
	if (mysql_result($query, 0) == 1) {
		return true;

	}else {
		return false;
	}

}




function login($username, $password){
	$user_id = user_id_from_username($username);
	$username = sanitize($username);
	$password = md5($password);

	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username`= '$username' AND `password` = '$password'");

	if (mysql_result($query, 0) == 1) {
		return $user_id;

	}else {

		return false;
	}

}


	?>