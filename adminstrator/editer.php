<?php
SESSION_START();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['iden']) && isset($_POST['f_name']) ){
$row = $_POST['iden'];
$firstname = $_POST['f_name'];
$surname = $_POST['surname'];
$mail =  $_POST['email'];
$address =  $_POST['address'];

echo "firstname -> $firstname  Surname $surname mail -> $mail address $address";

 $conn = mysqli_connect("localhost","root","","medical");
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//, email = $mail, paddress = $add
 /*$sql = mysqli_query($conn,"UPDATE users SET Fname = $fname   WHERE id = $row");
 $rows = mysqli_num_rows($sql);
UPDATE users SET Fname = chasey  WHERE id = 5
 */

$sql = "UPDATE users SET Fname = '$firstname', surname = '$surname', email = '$mail', paddress = '$address'   WHERE id = $row" ;
if ($conn->query($sql) == TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

/*
if( $rows == 1){
echo"Succefully update data";
}else{
	echo"Could not change data in database";
}*/


}

else{
  echo "<script type='text/javascript'> alert('All fields where not set!')</script>" ;

}

}else{
  echo "<script type='text/javascript'> alert('Posting was not done properly')</script>" ;

}


?>
