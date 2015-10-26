<?php
require_once("global.php");
if((empty($_POST['password'])) && (empty($_POST['desig'])) && (empty($_POST['doj'])) && (empty($_POST['salary'])) && (empty($_POST['fname'])) && (empty($_POST['lname']))){
  header('Location: general.php');
}
else{
  //donorid
  $password = $_POST['password'];
  $designation = $_POST['desig'];
  $doj = $_POST['doj'];
  $f_name = $_POST['fname'];
  $l_name = $_POST['lname'];
  $salary = $_POST['salary'];
  $bdcid = $_POST['bdcid'];

  $query1 = "SELECT * FROM BDC_EMPLOYEE;";
  $result1 = $mysqli->query($query1);

  $cur_pres = $result1-> num_rows;

  $empid = "";

  if ($cur_pres < 10){
    $empid =  "EMP00" . $cur_pres;
  }
  else if ($cur_pres < 100){
    $empid = "EMP0" . $cur_pres;
  }
  else if ($cur_pres < 1000){
    $empid = "EMP" . $cur_pres;
  }

  $query = "INSERT INTO BDC_EMPLOYEE VALUES('" . $empid . "','" . $bdcid . "','" . $f_name . "','" . $l_name . "','" . $desig . "','" . $doj . "','" . $password . "','" . $salary . "');";

  // incomplete NOT working

  if ($mysqli->query($query) === TRUE) {
    echo "Record created successfully";
    header('Location: general.php');
  } else {
    echo "Error creating record: " . $mysqli->error;
  }
}
?>
