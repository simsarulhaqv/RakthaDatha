<?php
require_once("global.php");
if((empty($_POST['password'])) && (empty($_POST['btype'])) && (empty($_POST['mobno'])) && (empty($_POST['email'])) && (empty($_POST['city'])) && (empty($_POST['fname'])) && (empty($_POST['lname']))){
  header('Location: index.php');
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

  $query = "INSERT INTO DONOR VALUES('" . $donorid . "','" . $password . "','" . $blood_type . "','" . $mobile_number . "','" . $e_mail . "','" . $f_name . "','" . $l_name . "','" . $the_real_city . "');";

  // incomplete NOT working

  if ($mysqli->query($query) === TRUE) {
    //echo "Record created successfully";
    echo "Please remember the following credentials for future use :<br>";
    echo "USERNAME : " . $donorid . "<br>PASSWORD : " . $password . "<br><br>";
    echo "redirecting to main page in 100 seconds . . .<br>";
    echo "<meta http-equiv=\"refresh\" content=\"100; index.php\">";

  } else {
    echo "Error creating record: " . $mysqli->error;
  }
}
?>
