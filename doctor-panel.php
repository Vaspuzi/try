<?php
 $conn = mysqli_connect("localhost","root","","medical");
 session_start();
 //include ("connection.php");
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



 function fill_symptom($conn){
  $output ='';

  $sql = "SELECT * FROM symptoms";

  $symptom = $_POST['symptom'];

  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result)){

    $output .= '<option value="'.$row["symptom_id"].'">'.$row["symptom"].'</option>';

  }

  return $output;
 }




 //try it out and see


//  function fill_disease($conn){

//   $output = '';
//   //$sql = "SELECT * FROM disease";
//   $sql = "SELECT distinct d.disease as disease, s.symptom as symptoms
// FROM disease d
//     INNER JOIN dsymptom b ON d.disease_id = b.disease_id
//     INNER JOIN symptoms s ON b.symptom_id  = s.symptom_id
// WHERE s.symptom_id = '3' OR s.symptom_id = '4' OR s.symptom_id = '23'";
//   $result = mysqli_query($conn, $sql);

//   $output .= '<div class="col-md-10 col-md-offset-1"><div class="table-responsive"><table class="table">
//                         <tr>
//                           <th>Disease</th>
//                           <th>Symptoms</th>
//                           <th>Description</th>
//                           </tr>
//                            ';

//   while ($row = mysqli_fetch_array($result)){

//     $output .= '
//                           <tr><td>'.$row["disease"].'</td>
//                               <td>'.$row["symptoms"].'</td>
//                               <td>'.$row["disease"].'</td>
//                         </tr>';
//     // $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["disease"].'';
//     // $output .= '</div>';
//     // $output .= '</div>';

//   }
//  $output .= '
//                           </table></div></div>';
//   return $output;

//  }

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
    <title>Doctor Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.php">MH Dr. Panel</a>
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
                        <a class="active-menu"  href="doctor-panel.php"><i class="fa fa-user-md fa-lg"></i>Consulting</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-lg"></i> View<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view-profile-doctor.php"> Profile</a>
                            </li>
                            <li>
                                <a href="user-record-doctor.php"> Record</a>
                            </li>
                            <li>
                                <a href="#"> Inbox<span class="fa arrow"></span></a>


                            </li>
                        </ul>
                      </li>
                      <li>
                        <a  href="#"><i class="fa fa-user-md fa-lg"></i>Book Appointment</a>
                    </li>
                      <li>
                          <a href="prescription.php"><i class="fa fa-pencil fa-lg"></i><span class="fa arrow"></span>Prescription</a>

                        </li>
                  <li  >
                        <a  href="pub.php"><i class="fa fa-square-o fa-lg"></i>Publications</a>
                    </li>
                    <li  >
                        <a  href="chat-doctor.php"><i class="fa fa-square-o fa-lg"></i>Chat</a>
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

                        <h5>Welcome <strong>Dr. </strong><span class="user"><?php echo $_SESSION['f_name'] ?></span> , Love to see you back. </h5>

                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                  <div class="content">
                    <div class="col-md-6">
                      <p>Consult patients for proper healthcare</p>
                      <hr />
                      <form class="form-horizontal" method="POST">
                        <div class="form-group">
                          <div class="col-sm-10">
                            <input type="hidden" name="gender" value="<?phpecho $_SESSION['gender'] ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Symptons</label>
                          <div class="col-sm-10">
                             <select multiple class="chosen-select" name="symptom" id="symptom">
                                <option value="">Show all diseases</option>
                                <option value="nausea">Nausea</option>
                                <option value="vomiting">Vomiting</option>
                                <option value="diarrhea">Diarrhea</option>
                                <option value="chest-pain">Chest Pain</option>
                                <option value="raised-rash">Raised Rash</option>
                                <option value="red-eyes">Red Eyes</option>
                                <option value="coughing">Coughing</option>
                                <option value="stomach-pain">Stomach Pain</option>
                                <option value="weight-loss">Weight Loss</option>
                                <option value="bleeding">Bleeding</option>
                                <option value="dehydration">Dehydration</option>
                                <option value="high-fever">High Fever</option>
                                <option value="sweating">Sweating</option>
                                <option value="headache">Headache</option>
                                <option value="anaemia">Anaemia</option>
                                <option value="coughing-blood">Coughing Blood</option>
                                <option value="fatigue">Fatigue</option>
                                <option value="fever">Fever</option>
                                <option value="chills">Chills</option>
                                <option value="abdominal-cramp">Abdominal Cramp</option>
                                <option value="constipation">Constipation</option>
                                <option value="abdominal-pains">Abdominal Pains</option>
                                <option value="watery-faeces">Watery Faeces</option>
                                <option value="poor-appetite">Poor Appetite</option>
                                <option value="lethargy">Lethargy</option>
                                <option value="intestinal-bleeding">Intestinal Bleeding</option>
                                <option value="general-pains">General Pains</option>
                                <?php// echo fill_symptom($conn); ?>
                              </select>

                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                      </form>

                    </div>

                  </div>


                  <!-- try it out -->
                       <br/><br/>
                       <div class="row" id="show_disease">
                        <?php
$output = '';
if(isset($_POST['submit'])){
 // echo "<script>alert('clicked')</script>";
  $symptom=mysqli_real_escape_string($conn, $_POST['symptom']);

  $query=mysqli_query($conn,"SELECT distinct d.disease as disease, s.symptom as symptoms
 FROM disease d
     INNER JOIN dsymptom b ON d.disease_id = b.disease_id
      INNER JOIN symptoms s ON b.symptom_id  = s.symptom_id
  WHERE s.symptom = '$symptom' ");
  $cubnt=mysqli_num_rows($query);
  echo $cubnt;
  $rows=mysqli_fetch_assoc($query);

   echo "<div class='col-md-10 col-md-offset-1'><div class='table-responsive'><table class='table'>
                         <tr>
                           <th>Disease</th>
                           <th>Symptoms</th>
                           <th>Description</th>
                        </tr>";
  $disease="";
  while ($row = mysqli_fetch_array($query)) {
    $disease.=$row['disease'].",";

       echo '<tr><td>'.$row["disease"].'</td>
                               <td>'.$row["symptoms"].'</td>
                               <td>'.$row["symptoms"].'</td>
                       </tr>';

}
  echo "</table></div></div>";
}


//   echo "<table style='padding:10px' class='table-bordered'><tr><th>Symptom</th><th>Disease</th></tr>
//   ";
//   $disease="";
//   while ($row=mysqli_fetch_assoc($query)) {
//     $disease.=$row['disease'].",";
//    }
//        echo "<tr><td> ".$symptom."</td>"."<td>".$disease."</td></tr>";


//   echo "</table>";
// }

 ?>

                        <!--?php //echo fill_disease($conn); ?-->
                       </div>

 <div id="comp-iirj9amo" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" style="bottom: -0.5px; right: -1px; position: fixed; z-index: 50; height: 38px; min-height: 18px; width: 159px;" class="s13" data-state="desktop shouldUseFlex center" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$comp-iirj9amo" data-prev-text="Book Now" data-prev-min-width="63" data-prev-width="159"><a href="#" target="_self" id="comp-iirj9amolink" class="g-transparent-a s13link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$comp-iirj9amo.0"><span id="comp-iirj9amolabel" class="s13label" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$comp-iirj9amo.0.0">Patient Online</span></a></div>
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


</body>
</html>

<!-- try it out -->
<script>
$(document).ready(function(){
     $('#symptom').change(function(){
           var symptom_id = $(this).val();

           $.ajax({
            url:"load_data.php",
            method:"POST",
            data:{symptom_id:symptom_id},
            success:function(data){
              $('#show_product').html(data);
            }

           });
     });
});

</script>
