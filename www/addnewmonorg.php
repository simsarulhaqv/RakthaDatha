<?php
require_once("global.php");
if((empty($_POST['password'])) && (empty($_POST['orgname'])) && (empty($_POST['cname'])) && (empty($_POST['email'])) && (empty($_POST['mobno']))){
  header('Location: index.php');
}
else{
  //donorid
  $password = $_POST['password'];
  $orgname = $_POST['orgname'];
  $email = $_POST['email'];
  $mobno = $_POST['mobno'];
  $cname = $_POST['cname'];

  $query1 = "SELECT * FROM MONETARY_ORGANISATION;";
  $result1 = $mysqli->query($query1);

  $cur_pres = $result1-> num_rows;

  $orgid = $cur_pres + 1;

  $query = "INSERT INTO MONETARY_ORGANISATION VALUES(" . $orgid . ",'" . $orgname . "','" . $cname . "','" . $email . "','" . $password . "','" . $mobno . "');";

  // incomplete NOT working

  if ($mysqli->query($query) === TRUE) {
    //echo "Record created successfully";
    echo "Please remember the following credentials for future use :<br>";
    echo "USERNAME : " . $orgid . "<br>PASSWORD : " . $password . "<br><br>";
  //  echo "redirecting to main page in 100 seconds . . .<br>";
  //  echo "<meta http-equiv=\"refresh\" content=\"100; index.php\">";

  } else {
    echo "Error creating record: " . $mysqli->error;
  }
}
?>
