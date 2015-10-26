<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

		<section class="row">
			<div>

				<form name="loginFrm" action="" method="POST">
					<input type="text" name="username" id="username" placeholder="Enter your Login ID"><br>
					<input type="password" name="password" id="password" placeholder="Enter your secret Password"><br>
					<input type="submit" value="Login" class="special"><br>
				</form>

			</div>
		</section>

<?php
require_once("footer.php");
?>
