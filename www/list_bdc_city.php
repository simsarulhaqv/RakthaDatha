<?php
require_once("global.php");
if(!isset($_POST['stateabbr'])){
  die();
}
else{
  $stateabbr = $_POST['stateabbr'];
  $the_real_city = "";
  $query2 = "SELECT * FROM CITY_STATE WHERE STATE_ABBR = '" . $stateabbr . "';";
  $result2 = $mysqli->query($query2);
  if($result2->num_rows == 1){
    $row = $result2->fetch_assoc();
    $the_real_city = $row['CITY'];
  }
  else{
    // error
  }
  $query1 = "SELECT * FROM BDC WHERE CITY = '" . $the_real_city . "';";
  $result = $mysqli->query($query1);
  while($row = $result->fetch_assoc()){
    echo "<option value=\"" . $row['BDC_ID'] . "\">" . $row['BDC_NAME'] . "</option>";
  }
}
?>
