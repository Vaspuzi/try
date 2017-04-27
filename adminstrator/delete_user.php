<?php
$conn = mysqli_connect("localhost","root","","medical");
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (isset($_POST['row-id'])) {
echo "data received </br>";
        $rowToDelete = intval($_POST['row-id']);
        echo "the row to be deleted is " . $rowToDelete ."</br>";
        $query = "DELETE FROM users WHERE id=" . $rowToDelete . " LIMIT 1"; // Or whatever your primary key is for the row, in my case "id". LIMIT 1 kind of gives added assurance that it won't delete tons of stuff if you make a mistake.
if ($query){
	$result = mysqli_query($conn, $query);
	echo "data deleted";
	 header('Location: view-user.php');
}
 else{
 	echo "Could not delete data";
 }       

}

}else{
	echo "data not received";
}
/*
//echo $music_number;
$qry = "DELETE FROM users WHERE id = $rowToDelete;
$result = mysql_query($qry);
if(isset($result)){
   echo "Worked";
} else {
   echo "NO";
}*/
?>