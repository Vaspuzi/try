<!DOCTYPE html>
<html>
<head>
<title>Medical Helper</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/cover.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body background="hos234.jpg">
   <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Medical Helper</h3>
              <nav>
                <ul class="nav masthead-nav navbar-right">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="admin-sign-in.php">Adminstrator</a></li>
                  <li><a href="nurse-sign-in.php">Nurse</a></li>
                  <li><a href="doctor-sign-in.php">Doctor</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Welcome To Medical Helper.</h1>
            <p class="lead">Get all your possible diagnosis here. Click on <a href="index.php" class="active"><span class="color">Home</span></a> to get started. Get well soon.</p>
            <h3> Your health our priority</h3>
            <p class="lead">
              <a href="index.php" class="btn btn-lg btn-info">Get Started</a>
            </p>
          </div>

        </div>

      </div>

    </div>
    <!--end menu footer -->
    <div class="ft">
      <div class="container">
        <div class="row">
          <footer>
            <p>This project is developed by <a href='#'>Gabiben</a></p>
          </footer>
        </div>
      </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
  $(function () {
   $('.myTooltip').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
   })
  })

</script>
</body>
</html>
