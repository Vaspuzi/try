<?php
function user_exits($username) {
	global $con;
	$username = sanitize($username);
	$query = mysqli_query($con, "SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username'");
	return (mysql_result($query, 0) == 1) ? true : false;
}
?>