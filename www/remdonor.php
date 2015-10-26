<?php

require_once("global.php");

$username = $_POST['uname'];
$mobno = $_POST['mobno'];

$query = "DELETE FROM DONOR WHERE DONOR_ID = '" . $username . "' AND MOBILE_NUMBER = '" . $mobno . "';";

if ($mysqli->query($query) === TRUE) {
  echo "Record deleted successfully";
  header('Location: index.php');
} else {
  echo "Error deleting record: " . $mysqli->error;
}
?>
