<?php
require('includes/core.inc.php');
 $conn = mysqli_connect("localhost","root","","medical");
 //session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>      
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CHAT WITH PATIENTS</title>
	

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
   <link type="text/css" rel="Stylesheet" href="chatapp/public/css/main.css"/>

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
	
	
	
<div id ="input">
	<div id="feedback"></div>
	<form action="" method="GET" id="form_input" class="form-horizontal" enctype="multipart/form-data" autocomplete="off">
	 <div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"><h3>Patient's ID: </h3></label>
	<div class="col-sm-8">
	<input type="text" name ="recep" id="recep" class="form-control"/>
	</div>
	</div>
	
	 <div class="form-group">
	<label for="inputEmail3" class="col-sm-4 control-label"><h3>Doctor's ID: </h3></label>
	<div class="col-sm-8">
	<input type="text" name ="sender" id="sender" value="<?php echo $_SESSION['Did']?>" class="form-control"disabled />
	</div >
	</div>
	
	 <div class="form-group">
 
<label for="inputEmail3" class="col-sm-4 control-label"><h3>Message:</h3></label>
<div class="col-sm-8">	
<textarea id = "message" class="form-control" rows="3"></textarea>
</div >
<br/>
<br/>
<br/><br/>
<br/>
<br/>

<label for="inputEmail3" class="col-sm-4 control-label"><h3> </h3></label>
<div class="col-sm-8">
<input type="submit" name="send" id="send" value="Send message"/>
<br/>
<br/>
<br/>
<br/>
</div>
<label for="messages" class="col-sm-4 control-label"><h3>Previous Messages:</h3></label>

<div class="col-sm-8">
<div id="messages">


</div><!--Messages -->

</div>
	</form>
             </div>



                  </div>
                  <div class="footer">

  </div>
 <div id="comp-iirj9amo" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" style="bottom: -0.5px; right: -1px; position: fixed; z-index: 50; height: 38px; min-height: 18px; width: 159px;" class="s13" data-state="desktop shouldUseFlex center" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$comp-iirj9amo" data-prev-text="Book Now" data-prev-min-width="63" data-prev-width="159"><a href="#" target="_self" id="comp-iirj9amolink" class="g-transparent-a s13link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$comp-iirj9amo.0"><span id="comp-iirj9amolabel" class="s13label" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$comp-iirj9amo.0.0">PATIENTS ONLINE</span></a></div>
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
</div>

<script type="text/javascript" src="scripts/js/jquery.js"></script>
<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
<script type="text/javascript" src="scripts/js/send.js"></script>



</body>
</html>
