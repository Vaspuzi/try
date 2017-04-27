dd<?php
 $conn = mysqli_connect("localhost", "root", "","medical");

//$db = mysqli_select_db($conn, "medical");
   

   $sql = "Select symptom from symptoms order by symptom";
   $res = mysqli_query($sql);


   $arreglo_php = array();


   if(mysqli_num_rows($res)==0)
   	  array_push($arreglo_php, "No hay datos");
   	else{
   		while($palabras = mysqli_fetch_array($res)){
   			array_push($arreglo_php, $palabras["symptom"]);
   		}
   	}

?>