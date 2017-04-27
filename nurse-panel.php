<?php
 $conn = mysqli_connect("localhost","root","","medical");
 session_start();

$error = '';

if (isset($_POST['submit'])) {
    
    $body_temp = $_POST['body_temp'];
    $pulse_rate = $_POST['pulse_rate'];
    $respiration_rate = $_POST['respiration_rate'];
    $systolic = $_POST['systolic'];
    $diastolic = $_POST['diastolic'];
    $name = $_POST['username'];
    $field1 = "'".date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['field1'])))."'";
   // $xplod = explode('', $field1);
   // $string = "$xplod[5]-$xplod[1]-$xplod[2]"; 
   // $date = date("Y-m-d", strtotime($string));

    
    

    
    $conn = new mysqli('localhost', 'root', '') or die(mysql_error());
    $db = mysqli_select_db($conn, 'medical') or die("DB error");

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$name."'");
    $numrows = mysqli_num_rows($query);
    if ($numrows == 1) {
      $sql = "INSERT INTO vitals (body_temp, pulse_rate, respiration_rate, systolic, diastolic, username, datee ) VALUES ('$body_temp', '$pulse_rate', '$respiration_rate', '$systolic', '$diastolic', '$name',$field1 )";
      $result = mysqli_query($conn, $sql);


      
    }

            else{
              $error =  "That username does not exists. Please try again";
            }
}




function users($conn){
  $output ='';

  $sql = "SELECT * FROM users";

  $symptom = $_POST['username'];

  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result)){

    $output .= '<option value="'.$row["id"].'">'.$row["username"].'</option>';

  }

  return $output;
 }

 
?>



<?php 

// $conn = mysqli_connect("localhost","root","","medical");

//     if (isset($_POST['search'])){
//   $searchq = $_POST['search'];
//   $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

//       $query = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE '%$searchq%' ") or die("could not search");
//       $count = mysqli_num_rows($conn,$query);
//       if($count == 0){
//         $output = 'there was no search results';
//       }else{
//          while ($row = mysqli_fetch_array($query)) {
//           $username = $row['username'];
//           $other = $row['other'];
//           $id = $row['id'];

//            $output .= '<div>'.$username.'<div>';

//          }
//       }


// }

 ?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style type="text/css">
  table{
    margin: auto;
  }
th,td{
  padding: 15px;

}

  </style>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nurse Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="adminstrator/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-chosen.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/book.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="adminstrator/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="adminstrator/js/wow.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">MH Nurse Panel</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : <?php echo date("m/d/Y"); ?> &nbsp; <a href="logout1.php" class="btn btn-danger square-btn-adjust"><i class="fa fa-sign-out"></i>Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo $_SESSION['profile'] ?>" class="user-image img-responsive"/>
					</li>


                    <li>
                        <a class="active-menu"  href="nurse-panel.php"><i class="fa fa-user-md fa-lg"></i>Vitals</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-lg"></i> View<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view-nurse-profile.php"> Profile</a>
                            </li>
                            <li>
                                <a href="nurse-record-view.php"> Record</a>
                            </li>
                            <li>
                                <a href="#"> Inbox<span class="fa arrow"></span></a>
                            </li>
                        </ul>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-sitemap fa-lg"></i> Edit<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="#"><i class="fa fa-user fa"></i> Profile</a>
                              </li>
                              <li>
                                  <a href="#"> Record</a>
                              </li>
                              <li>
                                  <a href="#"> Inbox<span class="fa arrow"></span></a></li>
                          </ul>
                        </li>
                 
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Medical Helper</h2>
                     
                        <h5>Welcome Nurse <span class="user"><?php echo $_SESSION['username'] ?></span> , Love to see you back. </h5>
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                  <div class="content">
                    <div class="col-md-6">
                      <p>Please enter the vitals of the patient</p>
                      <hr />
                      <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Username</label>
    <div class="col-sm-8">
      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username of Patient">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Body Tempreture <span><i>(C)</i></span></label>
    <div class="col-sm-8">
      <input type="text" name="body_temp" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Pulse Rate <span><i>(b/m)</i></span></label>
    <div class="col-sm-8">
      <input type="text" name="pulse_rate" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Respiration Rate <span><i>(b/m)</i></span></label>
    <div class="col-sm-8">
      <input type="text" name="respiration_rate" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="row"><h4 class="col-sm-offset-6 col-sm-6"><strong>Blood Pressure</strong></h4></div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Systolic <span><i>(mmHg)</i></span></label>
    <div class="col-sm-8">
      <input type="text" name="systolic" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Diastolic <span><i>(mmHg)</i></span></label>
    <div class="col-sm-8">
      <input type="text" name="diastolic" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  
  <div class="form-group">
    <label for="date" class="col-sm-4 control-label">Date</label>
    <div class="col-sm-8">
      <input type="date" name="field1" id="field1" class="form-control"  placeholder=" ">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
<strong><h3 style='color:red'><?php echo $error; ?></span></h3></strong><span>

  </div>
              <div class="col-md-6">
                      <p><h2>Search for patient</h2></p>
                      <hr />
                      <form name="form1" method="POST" action="nurse-panel.php">
                <select multiple class="chosen-select" name="symptom" id="symptom">
                                <option value=""></option>
                                <?php echo users($conn); ?>
                              </select>
                               </form>
                    </div>

                    </div>
                    
                    </div>
                  </div>
                  </div>


                  

 
			</div>
                 <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/jquery-2.2.0.min"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/chosen.jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script>
      $('.chosen-select').chosen();
    </script>
    <script src="admistrator/js/jquery.nicescroll.js"></script>
<script src="admistrator/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="admistrator/js/bootstrap.min.js"></script>
    
</body>
</html>

<?php 

 ?>
