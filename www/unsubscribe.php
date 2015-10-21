<?php

require_once("global.php");

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
			<div>
				<?php
					if(!isset($_POST['password'])){
				?>
				<form name="unsubsFrm" action="" method="POST">

					<select id="uniqid" name="uniqid" onchange="unsubscribe()">
						<option value="">- Select One of the below -</option>
						<option value="DNR">DONOR</option>
						<option value="MONORG">MONETARY ORGANISATION</option>
						<option value="RCV">RECEIVER</option>
						<!-- think a good alternative -->
					</select>

					<div id="op1">

					</div>

				</form>
				<?php
					}
					else{
						$uniqid = $_POST['uniqid'];
						if ($uniqid == "DNR"){
							$username = $_POST['username'];
							$password = $_POST['password'];

							$query = "DELETE FROM DONOR WHERE DONOR_ID = '" . $username . "' AND PASSWORD = '" . $password . "';";

							if ($mysqli->query($query) === TRUE) {
    						echo "Record deleted successfully";
								header('Location: general.php');
							} else {
    						echo "Error deleting record: " . $mysqli->error;
							}

						}
						else if ($uniqid == "RCV"){
							$blood_group = $_POST['bldgrp'];
							$mobile_number = $_POST['mobno'];

							$query = "DELETE FROM RECEIVER WHERE BLOOD_GROUP = '" . $blood_group . "' AND MOBILE_NUMBER = '" . $mobile_number . "';";

							if ($mysqli->query($query) === TRUE) {
    						echo "Record deleted successfully";
								header('Location: general.php');
							} else {
    						echo "Error deleting record: " . $mysqli->error;
							}
						}
						else if ($uniqid == "MONORG"){
							$username = $_POST['username'];
							$password = $_POST['password'];

							$query = "DELETE FROM MONETARY_ORGANISATION WHERE ORG_ID = '" . $username . "' AND PASSWORD = '" . $password . "';";

							if ($mysqli->query($query) === TRUE) {
    						echo "Record deleted successfully";
								header('Location: general.php');
							} else {
    						echo "Error deleting record: " . $mysqli->error;
							}
						}
					}
				?>
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
