<?php
$conn = mysqli_connect("localhost", "root","","medical");
require('../../includes/functions/chat.func.php');


 $query = "SELECT * from chat,users,doctor WHERE Cuid = id AND CDid = doctor_id";//"'Sender' , 'Message' ";
if($run = mysqli_query($conn,$query)){
while($message = mysqli_fetch_assoc($run)){
	 echo '<strong>Patient ->   '.$message['Fname'].'  Doctor->  '.$message['f_name'].'  </strong><br />';
	 echo $message['message'].'<br /><br />';
}
}else{
	echo "The query did not work as planned";
}
?>