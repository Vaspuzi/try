<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //create variables for the connection
    $name = "localhost";
    $user = "root";
    $pass = "";
    $db = $_POST['db'];
    $table = $_POST['tab'];
    $primary = $_POST['identi'];
    
$con = mysqli_connect($name,$user,$pass,$db) or die("could not connect");

    if (isset($_POST['row-id'])) {
//echo "data received";
        $rowToDelete = intval($_POST['row-id']);
      //  echo "the row to be deleted is " . $rowToDelete;
        $query = "DELETE FROM $table WHERE $primary =" . $rowToDelete . " LIMIT 1"; // Or whatever your primary key is for the row, in my case "id". LIMIT 1 kind of gives added assurance that it won't delete tons of stuff if you make a mistake.
        
if ($query){
	$result = mysqli_query($con, $query);
	echo "data deleted";
     header('Location.pathname'); 
}
 else{
 	echo "Could not delete data";
 }       

        // Send the user back to the first page so they don't have that annoying pop-up if they hit the refresh button after deleting something.
       // header('Location: hidden.php'); // Obviously, replace with the location of the page that you need it to redirect to.
    }
    else{
    	echo "Data not received";
    }
}else
{
	echo "Posting not done ";
}
?>