<?php
 $conn = mysqli_connect("localhost","root","","medical");
session_start();

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>View Doctor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts--->
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head>
   <body class="sticky-header left-side-collapsed"  <!--onload="initMap()"-->
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.php">MH <span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.php"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li><a href="index.php"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
						<li ><a href="#"><i class="lnr lnr-spell-check"></i> <span>Register</span></a>
							<ul class="sub-menu-list">
								<li><a href="add-nurse.php">Add Nurse</a> </li>
								<li><a href="add-doctor.php">Add Doctor</a></li>
								<li><a href="add-adminstrator.php">Add Adminstrator</a> </li>
								<li><a href="add-user.php">Add User</a></li>
							</ul>
						</li>
						<li><a href="codes.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
						<li class="active" class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Records</span></a>
							<ul class="sub-menu-list">
								<li><a href="view-user.php">Patient</a> </li>
								<li><a href="view-nurse1.php">Nurse</a></li>
								<li><a href="view-doctor1.php">Doctor</a></li>

								<li><a href="view-admin.php">Adminstrator</a></li>
							</ul>
						</li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
    <!-- left side end-->

    <!-- main content start-->
		<div class="main-content main-content3">
			<!-- header-starts -->
			<div class="header-section">

			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">
					<div class="profile_details">
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">
										<span style="background:url(<?php echo $_SESSION['admprofile'] ?>) no-repeat center"> </span>
										 <div class="user-name">
											<p><?php echo $_SESSION['admusername'] ?><span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>
									</div>
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
									<li> <a href="admin-profile.php"><i class="fa fa-user"></i>Profile</a> </li>
									<li> <a href="../logout1.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!--notification menu end -->
			</div>
	<!-- //header-ends -->
			<div id="page-wrapper"  style="padding-top: 60px;">
				<div class="graphs">
					<h3 class="blank1">View Doctor</h3>
						<div class="tab-content">
						<div>
							<p>Search</p>
							<form name="form1" method="POST" action="searchresults.php">
								<input name="search" type="text" size="40" maxlenght="50" />
								<input type="submit" name="submit" value="Search" />
							</form>
						</div>
						<div class="clearfix"></div>


						<!--this outputs the recored found in the database-->

                       <?php
                       $db = "medical";
						$table = "doctor";
						$iden = "doctor_id";

                         echo '<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">';

                         	echo '
                                <thead>
                                    <tr>
									    <th>ID No.</th>
                                        <th>First Name</th>
                                        <th>Surname</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Username</th>
										<th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>';
$db = "medical";
$table = "users";
$iden = "nurse_id";
$site = "view-user.php";

								  $doctor_query=mysqli_query($conn,"select * from doctor ")or die(mysql_error());
									while($row=mysqli_fetch_array($doctor_query)){

									echo'
                  <form name="delet" action="" method="POST" ';?>onsubmit="return confirm('Are you Sure you want to delete user');" >
                  	<?php echo'
									<tr class="del ">

                                   <td> '.$row['doctor_id'].' </td>
									<td> '.$row['username'].' </td>
									<td> '.$row ['f_name'].' </td>
                                    <td> '.$row['surname'].'  </td>
                                    <td> '.$row['gender'].' </td>
									 <td> '.$row['email'].' </td>
									 ';

									echo'
                                    <td class="action">
										<input type="hidden" id="iden" value="'.$row['doctor_id'].'" name="row-id">
	                                 	<input type="hidden" id="iden" value="'.$db.'" name="db">
	                                 	<input type="hidden" id="iden" value="'.$iden.'" name="identi">
                      					<input type="hidden" id="iden" value="'.$table.'" name="tab">
                      					<input type="hidden" id="iden" value="'.$site.'" name="syt">
	                                 <input type="submit" value="Delete" class="btn btn-danger">

                                      	<a  rel="tooltip"  title="Edit" id="e echo $id; " href="edit_book.php" class="btn btn-success"><i class="fa fa-pencil fa-fw"></i></a>
                                    </td>

                                    </tr>
				   </form>
                                    ';

}
                               echo' </tbody>
                            </table> '
                            ;
?>

		</div>
		<!--footer section start-->
			<footer>
			   <p>This project is developed by <a href='#'>Gabiben</a></p>
			</footer>
        <!--footer section end-->
	</section>

<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>

</body>
</html>


<?php
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST['delet'])){
    $name = "localhost";
     $user = "root";
     $pass = "";
     $db = $_POST['db'];
     $table = $_POST['tab'];
     $primary = $_POST['identi'];
     $reboud =  $_POST['syt'];

  $con = mysqli_connect($name,$user,$pass,$db) or die("could not connect");

if (isset($_POST['row-id'])) {
  $rowToDelete = intval($_POST['row-id']);
   $query = "DELETE FROM $table WHERE $primary =" . $rowToDelete . " LIMIT 1"; // Or whatever your primary key is for the row, in my case "id". LIMIT 1 kind of gives added assurance that it won't delete tons of stuff if you make a mistake.

if($conn -> query($query) == TRUE){
		echo "<script type='text/javascript'> alert('Deleted successfully!') </script>";

}else{
         echo "<script type='text/javascript'> alert('Was not able to delete user!') </script>" ;
        }

   /*if ($query){
   	$result = mysqli_query($con, $query);
   				echo "<script type='text/javascript'> alert('Deleted successfully!')" ;
        }else{
          echo "<script type='text/javascript'> alert('Was not able to delete user!')" ;
        }*/
};

}
else{
  //echo "<script type='text/javascript'> alert(' Posting not caught') </script>";
}

?>
