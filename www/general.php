<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

		<section class="row">
			<div>
				<?php
					$username = $_SESSION['username'];
					$tablename = $_SESSION['tname'];
					if(empty($tablename)){
						header('Location: login.php');
					}
					else{
						if($tablename == "ADMIN"){
							// assumption : only one admin
							//echo "admin";
							?>
							<div class="info message">
								<p>admin control panel</p>
							</div>
							<br><br><br>
								<select id="uniqid" name="uniqid" onchange="admin_actions()">
									<option value="">- Select One of the below -</option>
									<option value="addnewdnr">Add New Donor</option>
									<option value="remdnr">Remove a Donor</option>
									<option value="addbdc">Add Blood Donation Centre</option>
									<option value="rembdc">Remove Blood Donation Centre</option>
									<option value="addmonorg">Add new Monetary Organisation</option>
									<option value="remmonorg">Remove Monetary Organisation</option>
									<option value="viewalldnr">View all Donor Details</option>
								</select>

								<div id="op1">

								</div>

							<?php

						}
						elseif ($tablename == "BDC") {
	 						// BDC
							echo "bdc";
						}
						elseif ($tablename == "EMP") {
	 						echo " bdc employee";
						}
						elseif ($tablename == "DNR") {
	 						echo " donor";
						}
						elseif ($tablename == "MONORG") {
	 						echo " mon org";
						}
						else{
							header('Location: logout.php');
						}
					}

				?>
			</div>
		</section>

<?php
require_once("footer.php");
?>
