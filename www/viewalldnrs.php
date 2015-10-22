<?php
echo "a";
require_once("global.php");
echo "a";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/fluidbox.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">

	<title> :: RakthaDatha :: </title>

</head>
<body>

  <header>

    <div id="logo-container">
      <div id="logo"><a href="#">RakthaDatha</a></div>
      <div id="subtitle">"donate Blood, save Life"</div>
    </div>
    <nav id="head">
      <ul>
        <li><a href="index.php">Home</a></li>
        <?php
          if(isset($_SESSION['username'])){
        ?>
            <li><a href="logout.php">Log Out</a></li>
        <?php
          }
          else{
        ?>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="forgot_pw.php">Forgot Password</a></li>
        <?php
          }
        ?>
        <li><a href="unsubscribe.php">Un Subscribe (delete user)</a></li>
        <li><a href="blood_request.php" class="bordered">Request Blood</a></li>
        <li><a href="faq.php">Frequently Asked Questions</a></li>
      </ul>
    </nav>

  </header>

  <div id="content">

    <section class="row">
      <div class="photo-grid">

<table>
  <tr>
    <th>DONOR_ID</th><th>F_NAME</th><th>L_NAME</th><th>PASSWORD</th><th>BLOOD_TYPE</th><th>MOBILE_NUMBER</th><th>E_MAIL</th><th>CITY</th><th></th>
  </tr>
<?php

$query = "SELECT * FROM DONOR;";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>";
      echo $row['DONOR_ID'];
      echo "</td>";
      echo "<td>";
      echo $row['F_NAME'];
      echo "</td>";
      echo "<td>";
      echo $row['L_NAME'];
      echo "</td>";
      echo "<td>";
      echo $row['BLOOD_TYPE'];
      echo "</td>";
      echo "<td>";
      echo $row['MOBILE_NUMBER'];
      echo "</td>";
      echo "<td>";
      echo $row['E_MAIL'];
      echo "</td>";
      echo "<td>";
      echo $row['CITY'];
      echo "</td>";
      echo "<td>";
      echo "delete_icon_here";
      echo "</td>";
      echo "</tr>":

  }
} else {
  echo "Error deleting record: " . $mysqli->error;
}
?>

</table>


</div>
</section>


<section class="row">
<div class="col">
  <h2>Contact</h2>
  <p>
    Want to join us? Just send an <a href="mailto:joinus@rakthadatha.in">email</a>.
  </p>
</div>
<div class="col">
  <h2>In an Emergency ?</h2>
  <p>
    Ring us on <a href="tel://00918281753973">+918 281 753 973</a>, <a href="tel://00919446465211">+919 446 465 211</a> or <a href="tel://00918891428851">+918 891 428 851</a>.
  </p>
</div>
</section>


<section class="row">
<div class="col-full">
  <p>
    © 2015 - Project done by <a href="#">RakthaDatha Team</a>
  </p>
</div>
</section>

</div>

<script src="js/jquery.1.11.min.js"></script>
<script src="js/jquery.fluidbox.min.js"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>

</body>
</html>
