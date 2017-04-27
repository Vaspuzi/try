<?php

$conn = mysqli_connect("localhost","root","","medical");

$output = '';

if(isset($_POST["submit"])){

	if($_POST["symptom_id"] != ''){


		$symptom_id = $_POST['symptom_id'];

		$sql = "SELECT * FROM dsymptom WHERE symptom_id = '".$_POST["symptom_id"]."'";
	}
	else{
		$sql = "SELECT * FROM dsymptom";
	}

	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($result)) {
		
		$output .= '<div class="col-md-3"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["disease"].'</div></div';
	}

	echo $output;
}


$sql = ($conn, "SELECT disease.disease FROM dsymptom LEFT JOIN disease ON dsymptom.disease_id = disease.disease_id WHERE dsymptom.symptom_id = '$symptom_id' AND dsymptom.symptom_id = '$symptom_id' AND dsymptom.symptom_id = '$symptom_id'");
?>