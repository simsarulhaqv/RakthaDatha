<?php

require_once("global.php");

$empid = $_POST['empid'];
$bdcid = $_POST['bdcid'];

$query = "DELETE FROM BDC_EMPLOYEE WHERE EMP_ID = '" . $empid . "' AND BDC_ID = '" . $bdcid . "';";

if ($mysqli->query($query) === TRUE) {
  echo "Record deleted successfully";
  header('Location: general.php');
} else {
  echo "Error deleting record: " . $mysqli->error;
}
?>
