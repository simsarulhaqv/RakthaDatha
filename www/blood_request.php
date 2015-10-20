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
			<div id="subtitle">the online blood donation management system</div>
		</div>
		<nav id="head">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li><a href="login.php">Log In</a></li>
				<li><a href="forgot_pw.php">Forgot Password</a></li>
				<li><a href="unsubscribe.php">Un Subscribe (delete user)</a></li>
				<li><a href="blood_request.php" class="bordered">Request Blood</a></li>
				<li><a href="faq.php">Frequently Asked Questions</a></li>
			</ul>
		</nav>

	</header>

	<div id="content">

		<section class="row">
			<div>

				<form name="requestBlood" action="" method="POST">

					<fieldset>
						<legend>Personal information : </legend>
						<select name="bgroup">
							<option value="">- Blood required -</option>
 							<option value="A+">A+</option>
 							<option value="A-">A-</option>
 							<option value="B+">B+</option>
 							<option value="B-">B-</option>
						</select>
						<br>
						 Amount of blood required : (in L) <input type="number" id="blitre" name="blitre" placeholder="Amount of blood required : (in L)">
						 <br>
					</fieldset>

					<fieldset>
						<legend>Personal information : </legend>
						 <input type="text" name="fname" id="fname" placeholder="First name"><br>
						 <input type="text" name="lname" id="lname" placeholder="Last name"><br>
						<textarea name="message" id="message" placeholder="Address" rows="6"></textarea>

					</fieldset>

					<fieldset>
						<legend>Personal information : </legend>
						When is blood required ? (Date and Time)
						<br>
						ready to make payment ?
						<br>
					</fieldset>

					<input type="submit" value="request blood" class="special">

				</form>

			</div>
		</section>


		<section class="row">
			<div class="col">
				<h2>Contact</h2>
				<p>
					Want to work with us? Just send us an <a href="mailto:joinus@rakthadatha.in">email</a>.
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
