<?php
 $conn = mysqli_connect("localhost","root","","medical");
 session_start();

                
?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nurse Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/book.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <a   href="nurse-panel.php"><i class="fa fa-user-md fa-lg"></i>Vitals</a>
                    </li>
                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-sitemap fa-lg"></i> View<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-menu" href="view-nurse-profile.php"> Profile</a>
                            </li>
                            <li>
                                <a href="#"> Record</a>
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
                                  <a href="#"> Inbox<span class="fa arrow"></span></a>
                                  </li>
                          </ul>
                        </li>
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-lg"></i> Blank Page</a>
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
                     
                        <h5>Welcome <span class="user"><?php echo $_SESSION['username'] ?></span> , Love to see you back. </h5>
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                  <div class="content">
                    <div class="col-md-12">
                      <p><h1>Record of Patients</h1></p>
                      <hr />
                      <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                
                
              
                                <thead>
                                    <tr>
                      <th>ID No.</th>                                 
                                        <th>Username</th>                                 
                                        <th>Body Tempreture <span><i>(C)</i></span></th>
                    <th>Pulse Rate <span><i>(b/m)</i></span></th>
                    <th>Respiration Rate <span><i>(b/m)</i></span></th>
                    <th>Systolic <span><i>(mmHg)</i></span></th>
                    <th>Diastolic <span><i>(mmHg)</i></span></th>
                    <th>Date <span><i>()</i></span></th>  
                                    </tr>
                                </thead>
                                <tbody>
                 
                                  <?php 

              
              
                  

                  $user_query=mysqli_query($conn,"select * from vitals ")or die(mysql_error());
                  while($row=mysqli_fetch_array($user_query)){
                   $id=$row['id'];  
                  
                  ?>
                  <tr class="del<?php //echo $id ?>">
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['body_temp']; ?></td>
                                    <td><?php echo $row['pulse_rate']; ?> </td>
                                    <td><?php echo $row['respiration_rate']; ?></td> 
                                    <td><?php echo $row['systolic']; ?></td>
                                    <td><?php echo $row['diastolic']; ?></td>
                                    <td><?php echo $row['datee']; ?></td>
                  
                  
                                    </tr>
                  <?php  }  
                                      
                  ?>
                           
                                </tbody>
                            </table>
                    </div>

                    

                  </div>
                  <div class="footer">

  </div>
 
			</div>
      <div class="footer_resize">
        <p class="rf"><a href="index.html">HOME</a> | <a href="library.html">LIBRARY</a> | <a href="about.html">ABOUT US</a> | <a href="diagnosis.html">DIAGNOSIS</a>| <a href="blog.html">BLOG</a> | <a href="book.html">BOOK</a> | <a href="contact.html">CONTACTS</a><br/>
        <div style="clear:both;"></div>
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
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
