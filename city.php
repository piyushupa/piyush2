<?php
error_reporting(0);
include('db/connection.php');
$gd = $_GET['dta'];
$gd1 = $_GET['dta1'];

$result = mysqli_query($con,"select * from cities where name like '".$gd."%'") or die(mysqli_error()) ;
$result1 = mysqli_query($con,"select * from cities where name like '".$gd1."%'") or die(mysqli_error()) ;
$rec = mysqli_fetch_array($result);
echo str_replace("Bombuflat","",$rec['name']);
$rec1 = mysqli_fetch_array($result1);
echo str_replace("Bombuflat","",$rec1['name']);
?>