<?php
 $conn = mysqli_connect("localhost","root","","medical");
 session_start();
// include('session.php');
//include 'core/init.php';
// $user_query=mysqli_query($con,"select * from member")or die(mysql_error());
//                   while($row=mysqli_fetch_array($user_query)){
//                   $id=$row['member_id'];



//  $user_query=mysqli_query($conn,"SELECT disease.disease
// FROM dsymptom
//    LEFT JOIN disease ON dsymptom.disease_id = disease.disease_id
// WHERE dsymptom.symptom_id = '$symptom' AND dsymptom.symptom_id = '$symptom' AND dsymptom.symptom_id = '$symptom'")or die(mysqli_error());
//               $row=mysqli_fetch_array($user_query);
//               $_SESSION['disease'] = $row['disease'];
//               $_SESSION['symptom'] = $row['symptom'];

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diagnosis</title>
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
                <a class="navbar-brand" href="index.php">Diagnosis</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access :<?php echo date("m/d/Y"); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust"><i class="fa fa-sign-out"></i>Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo $_SESSION['profile'] ?>" class="user-image img-responsive"/>
          </li>


                    <li>
                        <a   href="diagnosis.php"><i class="fa fa-user-md fa-lg"></i> Sympton Checker</a>
                    </li>
                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-sitemap fa-lg"></i> View<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-menu" href="view_profile.php"> Profile</a>
                            </li>
                            <li>
                                <a href="user-record.php"> Record</a>
                            </li>
                            <li>
                                <a href="#"> Inbox<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

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
                                  <ul class="nav nav-third-level">
                                      <li>
                                          <a href="#">Third Level Link</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Link</a>
                                      </li>
                                      <li>
                                          <a href="#">Third Level Link</a>
                                      </li>

                                  </ul>

                              </li>
                          </ul>
                        </li>
                  <li  >
                        <a  href="chat-user.php"><i class="fa fa-square-o fa-lg"></i> Chat</a>
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
                    <div class="col-md-6">
                      <p><h1>Chat</h1></p>
                      <hr />
                      <form class="form-horizontal" action="" method="GET" id ="form_input" enctype="multipart/form-data" autocomplete="off">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label"><h3>Message</h3></label>
    <div class="col-sm-8">
      <textarea name="message" id="message" class="form-control" rows="3"></textarea>
    </div>
</DIV>
<input type="hidden" id="doctor" name="Doc" value="'.$_SESSION['Did'].'" disabled/>
<!--//an exampleinput type="hidden" id="iden" value="'.$table.'" name="tab"-->
<div class="form-group">
<div id ="clr"></div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit" class="btn btn-default">Send</button>
        </div>
      </div>
</div>

<div class="form-group">
      <label for="messages" class="col-sm-4 control-label"><h3> Previous Messages</h3></label>

    <div class="col-sm-8">
      <textarea class="form-control" cols = "50" rows="25"></textarea>
    </div>
  </div>


</form>
                    </div>



                  </div>
                  <div class="footer">

  </div>
 <div id="comp-iirj9amo" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" style="bottom: -0.5px; right: -1px; position: fixed; z-index: 50; height: 38px; min-height: 18px; width: 159px;" class="s13" data-state="desktop shouldUseFlex center" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$comp-iirj9amo" data-prev-text="Book Now" data-prev-min-width="63" data-prev-width="159"><a href="#" target="_self" id="comp-iirj9amolink" class="g-transparent-a s13link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$comp-iirj9amo.0"><span id="comp-iirj9amolabel" class="s13label" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$comp-iirj9amo.0.0">Doctors Online</span></a></div>
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
    <script src="js/js/auto_chat.js"></script>
    <script src="js/js/send.js"></script>


</body>
</html>

<?php
/*creating a chat system where the id of the doctro and the id of teh patient
the doctor is communicating with is kept*/
$doctorID = $_SESSION['Did'];



 ?>
