<?php

require_once("global.php");

$orgid = $_POST['orgid'];
$cnum = $_POST['cnum'];

$query = "DELETE FROM MONETARY_ORGANISATION WHERE ORG_ID = '" . $orgid . "' AND CONTACT_NUMBER = '" . $cnum . "';";

if ($mysqli->query($query) === TRUE) {
  echo "Record deleted successfully";
  header('Location: index.php');
} else {
  echo "Error deleting record: " . $mysqli->error;
}
?>
