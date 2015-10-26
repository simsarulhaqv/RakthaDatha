<?php

require_once("global.php");

$bdcname = $_POST['bdcname'];
$bdcid = $_POST['bdcid'];

$query = "DELETE FROM BDC WHERE BDC_ID = '" . $bdcid . "' AND BDC_NAME = '" . $bdcname . "';";

if ($mysqli->query($query) === TRUE) {
  echo "Record deleted successfully";
  header('Location: general.php');
} else {
  echo "Error deleting record: " . $mysqli->error;
}
?>
