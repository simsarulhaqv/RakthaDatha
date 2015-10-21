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

	<script src="js/jquery.1.11.min.js"></script>
	<script src="js/jquery.fluidbox.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>

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
					if(isset($_POST['uniqid'])){

						$uniqid = $_POST['uniqid'];

						if ($uniqid == "BDC") {

							$username = $_POST['choice1'];
							$mgrid = $_POST['choice2'];
						  $city = $_POST['choice3'];

							$sqlquery = "SELECT * FROM BDC WHERE BDC_ID = '" . $username . "' AND MGR_ID = " . $mgrid . " AND CITY = '" . $city . "';" ;

							$result = $mysqli->query($sqlquery);

	    				if ($result->num_rows == 1) {
	        			$row = $result->fetch_assoc();
								// continue reset password
							}
							else{
								// display error
							}

						}
						else if ($uniqid == "EMP"){
							$username = $_POST['choice1'];
							$design = $_POST['choice2'];
						  $doj = $_POST['choice3'];

							$sqlquery = "SELECT * FROM BDC_EMPLOYEE WHERE EMP_ID = '" . $username . "' AND DESIGNATION = '" . $design . "' AND DATE_OF_JOIN = '" . $doj . "';" ;

							$result = $mysqli->query($sqlquery);

	    				if ($result->num_rows == 1) {
	        			$row = $result->fetch_assoc();
								// continue reset password
							}
							else{
								// display error
							}
						}
						else if ($uniqid == "DNR"){
							$username = $_POST['choice1'];
							$mobno = $_POST['choice2'];
						  $btype = $_POST['choice3'];

							$sqlquery = "SELECT * FROM DONOR WHERE DONOR_ID = '" . $username . "' AND MOBILE_NUMBER = '" . $mobno . "' AND BLOOD_TYPE = '" . $btype . "';" ;

							$result = $mysqli->query($sqlquery);

	    				if ($result->num_rows == 1) {
	        			$row = $result->fetch_assoc();
								// continue reset password
							}
							else{
								// display error
							}
						}
						else if ($uniqid == "MONORG"){
							$username = $_POST['choice1'];
							$email = $_POST['choice2'];
						  $mobno = $_POST['choice3'];

							$sqlquery = "SELECT * FROM MONETARY_ORGANISATION WHERE ORG_ID = '" . $username . "' AND E_MAIL = '" . $email . "' AND CONTACT_NUMBER = '" . $mobno . "';" ;

							$result = $mysqli->query($sqlquery);

	    				if ($result->num_rows == 1) {
	        			$row = $result->fetch_assoc();
								// continue reset password
								echo "c";
							}
							else{
								// display error
								echo "err";
							}
						}


					}
					else{
				?>

				<form name="forgotFrm" action="" method="POST">

					<div id="op1">

						<select id="uniqid" name="uniqid" onchange="spawnnew()">
							<option value="">- Select One of the below -</option>
							<option value="BDC">Blood Donation Centre</option>
							<option value="EMP">Employee</option>
							<option value="DNR">Donor</option>
							<option value="MONORG">Monetary Organisation</option>
						</select>

					</div>

				</form>

				<?php
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

</body>
</html>
