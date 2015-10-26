<?php
require_once("global.php");
if((empty($_POST['password'])) && (empty($_POST['bdcname'])) && (empty($_POST['mgrid'])) && (empty($_POST['city']))){
  header('Location: general.php');
}
else{
  //donorid
  $password = $_POST['password'];
  $bdcname = $_POST['bdcname'];
  $mgrid = $_POST['mgrid'];
  $city = $_POST['city'];

  $query1 = "SELECT * FROM BDC;";

  $result1 = $mysqli->query($query1);

  $cur_pres = $result1-> num_rows;

  $bdcid = "";

  if ($cur_pres < 10){
    $bdcid = $city . "00" . $cur_pres;
  }
  else if ($cur_pres < 100){
    $bdcid = $city . "0" . $cur_pres;
  }
  else if ($cur_pres < 1000){
    $bdcid = $city . $cur_pres;
  }

  $the_real_city = "";
  $query2 = "SELECT * FROM CITY_STATE WHERE STATE_ABBR = '" . $city . "';";
  $result2 = $mysqli->query($query2);
  if($result2->num_rows == 1){
    $row = $result2->fetch_assoc();
    $the_real_city = $row['CITY'];
  }
  else{
    // error
  }

  $query = "INSERT INTO BDC VALUES('" . $bdcid . "','" . $bdcname . "','" . $password . "','" . $mgrid . "','" . $the_real_city . "');";

  // incomplete NOT working

  if ($mysqli->query($query) === TRUE) {
    echo "Record created successfully";
    header('Location: index.php');
  } else {
    echo "Error creating record: " . $mysqli->error;
  }
}
?>
