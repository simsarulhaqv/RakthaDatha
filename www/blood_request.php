<?php

require_once("global.php");

?>
<?php

		require_once("header.php");

?>

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


		<?php

				require_once("footer.php");

		?>
