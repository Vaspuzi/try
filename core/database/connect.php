<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';


$mysql_db = 'medical';
global $con;
// mysqli_connect('localhost','root','');
// mysql_select_db('medical');

//$connect_error - 'Sorry we\'re experiencing some downtime error.';
$con = mysqli_connect('localhost', 'root', '', 'medical');
?>