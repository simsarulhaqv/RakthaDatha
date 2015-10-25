<?php

require_once("global.php");

?>
<?php

		require_once("header.php");

?>

		<section class="row">
			<div>

				<?php
					if(!isset($_POST['password'])){
				?>
				<form name="loginFrm" action="" method="POST">
					<input type="text" name="username" id="username" placeholder="Enter your Login ID"><br>
					<input type="password" name="password" id="password" placeholder="Enter your secret Password"><br>
					<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" type="Submit"><i class="material-icons">Login</i></button><br>
				</form>
				<?php
					}
					else{
						$username = $_POST['username'];
						$password = $_POST['password'];
						$sqlquery1 = "SELECT * FROM RAKTHADATHA WHERE ADMIN_ID = '" . $username . "' AND PASSWORD = '" . $password . "';";
						$sqlquery2 = "SELECT * FROM BDC WHERE BDC_ID = '" . $username . "' AND PASSWORD = '" . $password . "';";
						$sqlquery3 = "SELECT * FROM BDC_EMPLOYEE WHERE EMP_ID = '" . $username . "' AND PASSWORD = '" . $password . "';";
						$sqlquery4 = "SELECT * FROM DONOR WHERE DONOR_ID = '" . $username . "' AND PASSWORD = '" . $password . "';";
						$sqlquery5 = "SELECT * FROM MONETARY_ORGANISATION WHERE ORG_ID = '" . $username . "' AND PASSWORD = '" . $password . "';";

    				$result1 = $mysqli->query($sqlquery1);
						$result2 = $mysqli->query($sqlquery2);
						$result3 = $mysqli->query($sqlquery3);
						$result4 = $mysqli->query($sqlquery4);
						$result5 = $mysqli->query($sqlquery5);

    				if ($result1->num_rows == 1) {
        			$row = $result1->fetch_assoc();
							// this is the admin login
						  // set session and header
							$_SESSION['tname'] = "ADMIN";
							$_SESSION['username'] = $row['ADMIN_ID'];
							$_SESSION['city'] = $row['CITY'];
							header('Location: general.php');
						}
						else{
							if ($result2->num_rows == 1) {
	        			$row = $result2->fetch_assoc();
								// this is the BDC login
							  // set session and header
								$_SESSION['tname'] = "BDC";
								$_SESSION['username'] = $row['BDC_ID'];
								$_SESSION['city'] = $row['CITY'];
								$_SESSION['cname'] = $row['CONTACT_NAME'];
								$_SESSION['mgrid'] = $row['MGR_ID'];
								header('Location: general.php');
							}
							else{
								if ($result3->num_rows == 1) {
		        			$row = $result3->fetch_assoc();
									// this is the employee login
								  // set session and header
									$_SESSION['tname'] = "EMP";
									$_SESSION['username'] = $row['EMP_ID'];
									//$_SESSION['city'] = $row['CITY'];
									$_SESSION['fname'] = $row['F_NAME'];
									$_SESSION['lname'] = $row['L_NAME'];
									$_SESSION['bdcid'] = $row['BDC_ID'];
									header('Location: general.php');
								}
								else{
									if ($result4->num_rows == 1) {
			        			$row = $result4->fetch_assoc();
										// this is the donor login
									  // set session and header
										$_SESSION['tname'] = "DNR";
										$_SESSION['username'] = $row['DONOR_ID'];
										$_SESSION['city'] = $row['CITY'];
										$_SESSION['fname'] = $row['F_NAME'];
										$_SESSION['lname'] = $row['L_NAME'];
										$_SESSION['bloodtype'] = $row['BLOOD_TYPE'];
										header('Location: general.php');
									}
									else{
										if ($result5->num_rows == 1) {
				        			$row = $result5->fetch_assoc();
											// this is the mon org login
										  // set session and header
											$_SESSION['tname'] = "MONORG";
											$_SESSION['username'] = $row['ORG_ID'];
											//$_SESSION['city'] = $row['CITY'];
											$_SESSION['cname'] = $row['CONTACT_NAME'];
											header('Location: general.php');
										}
										else{
										// no success
										// invalid entry
										// display the login form once again
				?>
										<div class="error message">
											<p>invalid password</p>
										</div>
										<form name="loginFrm" action="" method="POST">
											<input type="text" name="username" id="username" placeholder="Enter your Login ID" value="<?php echo $_POST['username']; ?>"><br>
											<input type="password" name="password" id="password" placeholder="Enter your secret Password" value="<?php echo $_POST['username']; ?>"><br>
											<input type="submit" value="Login" class="special"><br>
										</form>
				<?php
									}
								}
							}

						}
					}
				}
				?>

			</div>
		</section>

		<?php

				require_once("footer.php");

		?>
