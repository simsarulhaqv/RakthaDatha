
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

     <title>
       RakthaDatha
     </title>

     <link rel="stylesheet" href="css/material.red-deep_orange.min.css">
     <link rel="stylesheet" href="css/pace-theme-loading-bar.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>
  <body>

	<header>

      <div id="logo-container">
        <div id="logo">
          <a href="#">
            RakthaDatha
          </a>
        </div>
        <div id="subtitle">
          "donate Blood, save Life"
        </div>
      </div>
      <nav id="head">
        <ul>
          <li>
            <a href="index.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">  Home </button>
            </a>
          </li>
          <?php
if(isset($_SESSION['username'])){
?>
          <li>
            <a href="logout.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">  Log Out </button>
            </a>
          </li>
          <?php
          // the current browser session is logged in as somebody
					$a = $_SERVER['REQUEST_URI'];
					if (strpos($a,'index.php') !== false) {
  					// so redirect to general page if trying to access index.php
						header('Location: general_view.php');
					}

				}
				else{
					?>
          <li>
            <a href="signup.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">  Sign Up </button>
            </a>
          </li>
          <li>
            <a href="login.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">  Log In </button>
            </a>
          </li>
          <li>
            <a href="forgot_pw.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">  Forgot Password </button>
            </a>
          </li>
<?php
}
?>
          <li>
            <a href="unsubscribe.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">  Un Subscribe (delete user) </button>
            </a>
          </li>

          <li>
            <a href="blood_request.php" title="Request Blood">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--accent"></button>
            </a>
          </li>

          <li>
            <a href="faq.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">  Frequently Asked Questions </button>
            </a>
          </li>

        </ul>
      </nav>

  </header>

  <div id="content">
