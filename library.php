<?php


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Helper | Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<!--link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /-->
<style type="text/css">
    ul.sb_menu  {
      list-style: none;
        margin: 0;
        padding: 0;
    }
    ul.sb_menu li{
        padding: 10px;
        position:relative;
        width: 150px;
        vertical-align: middle;
        background-color: #00bfff;
        cursor: pointer;
        border-top: 1px solid #bdc3c7;
        border-right: 5px solid #f1c40f;
        -webkit-transition:all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }
    ul.sub_menu ul li:hover{
        background-color:  #bdc3c7;
    }
    ul.sb_menu li a:hover, ul.ex_menu li a:hover {
	color:#fff;
	font-weight:bold;
	text-decoration:none;
}
    ul.sb_menu ul > li{
        border-right: 5px solid #f1c40f;
    }
    ul.sb_menu ul{
        transition: all 0.3s;
        opacity: 0;
        position: absolute;
        border-left:  5px solid #f1c40f;
        visibility: hidden;
        left: 105%;
        top:-2%;
    }
    ul.sb_menu li:hover>ul{
        opacity: 1;
        visibility: visible;
    }
    ul.sb_menu li a{
        color: #6e6e6e;
        text-decoration: none;
    }
    ul.sb_menu li:nth-of-type(1)::after{
        content: "+";
        position: absolute;
        margin-left: 30%;
        color: #fff;
        font-size: 20px;
    }
    </style>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-aller.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">Medical<span>Helper</span> <small>Best healthcare you deserve</small></a></h1>
      </div>
      <div class="menu_nav">
         <ul>
          <li><a href="index.php"><span>Home</span></a></li>
          <!--li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Library <span class="caret"></span></a>
          <ul class="dropdown-menu ">
                  <li><a href="#">Ebola</a></li>
                  <li><a href="#">Cholera</a></li>
                  <li><a href="#">Malaria</a></li>

                  <li><a href="#">Typhoid</a></li>
                  <li><a href="#">Yellow Fever</a></li>
                  <li><a href="#">Tuberculosis</a></li>
                </ul>
              </li-->
          <li class="active"><a href="library.php"><span>Library</span></a></li>
          <li><a href="sign.php"><span>Diagnosis</span></a></li>
          <li><a href="book.php"><span>Book</span></a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="blog.php"><span>Blog</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
         <div id="coin-slider"> <a href="#"><img src="images/h4.jpg" width="960" height="320" alt="" /> </a> <a href="#"><img src="images/images.jpg" width="960" height="320" alt="" /> </a> <a href="#"><img src="images/h5.jpg" width="960" height="320" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Welcome to</span> Library</h2>
          <div class="clr"></div>
          <p><strong>The library section gives you a list of diseases and its related information.</strong> The library has in store a list of diseases together with it's related sysmptoms, treatments and medication. By reading the articles in the library one can get to know basic diseases and it's related information. </p>
          <p>This section also have in stock of images and videos. You can download and watch to help ones's self during emergencies.</p>
          <p><strong>Lorem ipsum dolor sit amet</strong></p>
          <p>This page defines a couple of diseases and thier various signs/symptoms, treatment, approved drugs and other important
            information on the disease. feel free to talk to any of our consultants or send us a mail and we would do well to get back to you
            in a period of 24 hours time.</p>
          <!--ul class="sb_menu">
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
            <li><a href="#"><strong>Lorem ipsum</strong></a></li>
          </ul-->
        </div>
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
              <li><a href="#">Disease list<span class="fa arrow"></span></a>
                  <ul>
                      <li><a href="library_ebola.php">Ebola</a></li>
                      <li><a href="library_tuberculosises.php">Tuberculosises</a></li>
                      <li><a href="library_cholera.php">Cholera</a></li>
                      <li><a href="library_malaria.php">Malaria</a></li>
                      <li><a href="library_typhoid.php">Typhoid</a></li>
                      <li><a href="library_yellowFever.php">Yellow Fever</a></li>
                      <li><a href="#">More...</a></li>
                  </ul>
              </li>
            <li><a href="#" >Signs & Symptons</a disabled>
              <!--ul>
                      <li><a href="#">Nausea</a></li>
                      <li><a href="#">Vomiting</a></li>
                      <li><a href="#">Diarrhea</a></li>
                      <li><a href="#">Chest pain</a></li>
                      <li><a href="#">Raised rash</a></li>
                      <li><a href="#">Red eyes</a></li>
                      <li><a href="#">Coughing</a></li>
                      <li><a href="#">Stomach pain</a></li>
                      <li><a href="#">Weight loss</a></li>
                      <li><a href="#">Bleeding</a></li>
                      <li><a href="#">Dehydration</a></li>
                      <li><a href="#">High fever</a></li>
                      <li><a href="#">Sweating</a></li>
                      <li><a href="#">Headache</a></li>
                      <li><a href="#">Anaemia</a></li>
                      <li><a href="#">Fatigue</a></li>
                      <li><a href="#">Fever</a></li>
                      <li><a href="#">Chills</a></li>
                      <li><a href="#">Watery faces</a></li>
                      <li><a href="#">Poor appetite</a></li>
                      <li><a href="#">Lethargy</a></li>
                      <li><a href="#">Contipation</a></li>
                      <li><a href="#">Intestinal bleeding</a></li>
                      <li><a href="#">General pains</a></li>
                      <li><a href="#">More...</a></li>
                  </ul-->
            </li>
            <li><a href="#">Treatments</a></li>
            <li><a href="#">Drugs</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Others</a></li>
          </ul>
          </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
   <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Our</span> Team</h2>
        <a href="#"><img src="images/member1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/member2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/member3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/member4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/member5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/member6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>This project work is to uncover some of that are characterized with traditional method of medical care. Therefore this project is amied at.</p>
        <ul class="fbg_ul">
          <li><a href="#">Patient taking long hours at various medical centres.</a></li>
          <li><a href="#">Drug taking based on acient myth or past experiences.</a></li>
          <li><a href="#">Opportunity to learn basic health practise.</a></li>
          <li><a href="#">Elimination of long queues at medical centres.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>You can contact Medical Helper anytime, anywhere in and around campus for your daignosis.For any detailed enquire vist us in<span><b> Room 5</b></span> at the Student's Clinic.</p>
        <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
          <span>Telephone:</span> +123-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">project@gmail.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MediHelp</a>.</p>
         <p class="rf"><a href="index.php">HOME</a> | <a href="library.php">LIBRARY</a> | <a href="about.php">ABOUT US</a> | <a href="sign.php">DIAGNOSIS</a>| <a href="blog.php">BLOG</a> | <a href="book.php">BOOK</a> | <a href="contact.php">CONTACTS</a><br/>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center>This project is developed by <a href='#'>Gabiben</a></div>
    <!--script src="js/jquery-2.2.0.min.js"></script-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--script src="js/bootstrap.min.js"></script-->
    </body>
</html>
