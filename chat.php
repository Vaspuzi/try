<?php
$conn = mysqli_connect("localhost", "root","","chat");
require('../../includes/functions/chat.func.php');


 $query = "SELECT * from chat";//"'Sender' , 'Message' ";
if($run = mysqli_query($conn,$query)){
while($message = mysqli_fetch_assoc($run)){
	 echo '<strong>'.$message['Sender'].' Sent </strong><br />';
	 echo $message['Message'].'<br /><br />';
}
}
?>