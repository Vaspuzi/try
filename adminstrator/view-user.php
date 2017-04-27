<?php
 $conn = mysqli_connect("localhost","root","","medical");
session_start();

 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>View Patient</title>
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
					<h3 class="blank1">View Patients</h3>
						<div class="tab-content">
						<div>
              <!--This is for searching the content on page-->
							<p>Search</p>
							<form name="form1" method="POST" action="searchresults.php">
								<input name="search" type="text" size="40" maxlenght="50" />
								<input type="submit" name="submit" value="Search" />
							</form>
						</div>

						<div class="clearfix"></div>
						<?php
                         echo '<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">';


                         	echo '
                                <thead>
                                    <tr>
									    <th>ID No.</th>
                      <th>Username</th>
                      <th>First Name</th>

										<th>Surname</th>
										<th>Other</th>
                    <th>Reference No.</th>
										<th>Year</th>
										<th>Gender</th>
										<th>Phone No.</th>
										<th>Email</th>
										<th>Postal Address</th>
										<th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>';
$db = "medical";
$table = "users";
$iden = "id";
$site = "view-user.php";

								  $user_query=mysqli_query($conn,"select * from users ")or die(mysql_error());
									while($row=mysqli_fetch_array($user_query)){
									 $id=$row['id'];
// example... <td class="tdate">'.$row['Eid'].'</td>....<td class="surname" data-id1="'.$row[id].'" contenteditable="true">< "'.$row['username'].'; </td>

//$_SESSION['admprofile'] = $row['id'];
//this form is for deleting the  user
									echo'
                  <form class="form-horizontal" action="" method="POST" ';?>onsubmit="return confirm('Are you Sure you want to delete user');" >
                  	<?php echo'
									<tr class="del ">
                                    <td> '.$row['id'].' </td>
                                    <td> '.$row ['username'].' </td>
                                    <td> '.$row['Fname'].' </td>
                                    <td> '.$row['surname'].'  </td>
                                    <td> '.$row['other'].' </td>
                                    <td> '.$row['reference'].' </td>
									 <td> '.$row['year'].' </td>
									 <td> '.$row['gender'].' </td>
									 <td> '.$row['pnumber'].' </td>
									 <td> '.$row['email'].' </td>
									 <td> '.$row['paddress'].' </td>
									 ';
									include('toolttip_edit_delete.php');
									include('delete_book_modal.php');
									/*this is for the del button....   <!--a><input type="button" class="btn btn-danger" data-toy-id="<?=$id?>"" value='Delete this toy'><i class="fa fa-trash fa-fw"></i></a-->
                                     //  <!--td class="action"> / /* $row['book_copies'];   $total;    </td-->
                                     */

									echo'
                                    <td class="action">
									<input type="hidden" id="iden" value="'.$row['id'].'" name="row-id">
										<input type="hidden" id="iden" value="'.$db.'" name="db">
	                                 	<input type="hidden" id="iden" value="'.$iden.'" name="identi">
                      					<input type="hidden" id="iden" value="'.$table.'" name="tab">
                      					<input type="hidden" id="iden" value="'.$site.'" name="syt">
	                                        <!--a rel="tooltip" id="but" <<title="Delete" data-toy-id="<?php echo $id; ?>"  href="#delete.php<?php echo $id; ?>"  value="Delete this data" class="btn btn-danger"><i class="fa fa-trash fa-fw"></i></a-->
							<input type="submit" value="Delete" class="btn btn-danger">
</form>

<form action="edit_book.php" method= "POST">
                    <input type="hidden" id="iden" value="'.$row['id'].'" name="row-id" />
										<input type="hidden" id="iden" value="'.$db.'" name="db" />
										<input type="hidden" id="iden" value="'.$iden.'" name="identi" />
										<input type="hidden" id="iden" value="'.$table.'" name="tab" />

										<input type="submit" value="Edit" class="btn btn-success">
                                      	<!--a  rel="tooltip"  title="Edit" id="e echo $id; " href="edit_book.php" class="btn btn-success"><i class="fa fa-pencil fa-fw"></i></a-->
                                    </td>

                                    </tr>
</form>
                                    ';

									  }

									?>
                               		 </tbody>
                            		</table>

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


data-toggle="modal"  data-target="#myModal"
<script type="text/javascript" >

</script>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = "localhost";
     $user = "root";
     $pass = "";


  $con = mysqli_connect($name,$user,$pass,$db) or die("could not connect");
if (isset($_POST['row-id']) && isset($_POST['db']) && isset($_POST['identi']) && isset($_POST['tab'])) {

 	$db = $_POST['db'];
     $table = $_POST['tab'];
     $primary = $_POST['identi'];
     $reboud =  $_POST['syt'];

  $rowToDelete = intval($_POST['row-id']);
  echo "<script type='text/javascript'> alert('it's working up to row delete!') </script>" ;
   $query = "DELETE FROM $table WHERE $primary =" . $rowToDelete . " LIMIT 1"; // Or whatever your primary key is for the row, in my case "id". LIMIT 1 kind of gives added assurance that it won't delete tons of stuff if you make a mistake.

   if ($query){
   	$result = mysqli_query($con, $query);
   				echo "<script type='text/javascript'> alert('Deleted successfully!')</script>" ;
        }else{
          echo "<script type='text/javascript'> alert('Was not able to delete user!') </script>" ;
        }
}
else{
 echo "<script type='text/javascript'> alert('some postings was not done!') </script>" ;
};



}
else{
  //echo "<script type='text/javascript'> alert(' Posting not caught') </script>";
}

?>
