
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
    :: RakthaDatha ::
  </title>

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
              Home
            </a>
          </li>
          <?php
if(isset($_SESSION['username'])){
?>
          <li>
            <a href="logout.php">
              Log Out
            </a>
          </li>
          <?php
          // the current browser session is logged in as somebody
					$a = $_SERVER['REQUEST_URI'];
					if (strpos($a,'index.php') !== false) {
  					// so redirect to general page if trying to access index.php
						header('Location: general.php');
					}

				}
				else{
					?>
          <li>
            <a href="signup.php">
              Sign Up
            </a>
          </li>
          <li>
            <a href="login.php">
              Log In
            </a>
          </li>
          <li>
            <a href="forgot_pw.php">
              Forgot Password
            </a>
          </li>
<?php
}
?>
          <li>
            <a href="unsubscribe.php">
              Un Subscribe (delete user)
            </a>
          </li>
          <li>
            <a href="blood_request.php" class="bordered">
              Request Blood
            </a>
          </li>
          <li>
            <a href="faq.php">
              Frequently Asked Questions
            </a>
          </li>
        </ul>
      </nav>

  </header>

  <div id="content">
