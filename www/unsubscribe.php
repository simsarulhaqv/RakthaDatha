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

<?php
require_once("footer.php");
?>
