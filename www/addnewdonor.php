<?php

require_once("global.php");
if((empty($_POST['password'])) && (empty($_POST['btype'])) && (empty($_POST['mobno'])) && (empty($_POST['email'])) && (empty($_POST['city'])) && (empty($_POST['fname'])) && (empty($_POST['lname']))){
header('Location: general.php');
}
else{
//donorid
$password = $_POST['password'];
$blood_type = $_POST['btype'];
$mobile_number = $_POST['mobno'];
$e_mail = $_POST['email'];
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$city = $_POST['city'];

$query1 = "SELECT * FROM DONOR;";
$result1 = $mysqli->query($query1);

$cur_pres = $result1-> num_rows;

$donorid = "";

if ($cur_pres < 10){
$donorid = $city . substr($mobile_number,8,2) . "00" . $cur_pres;
}
else if ($cur_pres < 100){
$donorid = $city . substr($mobile_number,8,2) . "0" . $cur_pres;
}
else if ($cur_pres < 1000){
$donorid = $city . substr($mobile_number,8,2) . $cur_pres;
}

$query = "INSERT INTO DONOR VALUES('" . $donorid . "','" . $password . "','" . $blood_type . "','" . $mobile_number . "','" . $e_mail . "','" . $f_name . "','" . $l_name . "','" . $city . "');";

// incomplete NOT working

if ($mysqli->
query($query) === TRUE) {
echo "Record created successfully";
header('Location: general.php');
} else {
echo "Error creating record: " . $mysqli->
error;
}
}
?>
