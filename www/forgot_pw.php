<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

<section class="row">
  <div>

        <form name="forgotFrm" action="" method="POST">

          <div id="op1">

            <select id="uniqid" name="uniqid" onchange="spawnnew()">
              <option value="">
                - Select One of the below -
              </option>
              <option value="BDC">
                Blood Donation Centre
              </option>
              <option value="EMP">
                Employee
              </option>
              <option value="DNR">
                Donor
              </option>
              <option value="MONORG">
                Monetary Organisation
              </option>
            </select>

          </div>

        </form>

  </div>
</section>

<?php
require_once("footer.php");
?>

<?php
if(isset($_POST['forgotPwd'])){

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
        echo "<script>";
        echo "var a = document.getElementById('op1');";
        echo "var b = '<input type=\"hidden\" name=\"pkid\" value=\"" . $username . "\"><input type=\"hidden\" name=\"uniqid\" value=\"BDC\"><div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\"><input class=\"mdl-textfield__input\" type=\"password\" id=\"password1\" name=\"password1\" /><label class=\"mdl-textfield__label\" for=\"password1\">Enter your new Password</label></div>';";
        echo "b = b + '<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\"><input class=\"mdl-textfield__input\" type=\"password\" id=\"password2\" name=\"password2\" /><label class=\"mdl-textfield__label\" for=\"password2\">Enter the Password once again</label></div>';";
        echo "b = b + '<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" name=\"resetPwd\" type=\"Submit\"><i class=\"material-icons\">?</i></button>';";
        echo "a.innerHTML = b;";
        echo "</script>";
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
        echo "<script>";
        echo "var a = document.getElementById('op1');";
        echo "var b = '<input type=\"hidden\" name=\"pkid\" value=\"" . $username . "\"><input type=\"hidden\" name=\"uniqid\" value=\"EMP\"><div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\"><input class=\"mdl-textfield__input\" type=\"password\" id=\"password1\" name=\"password1\" /><label class=\"mdl-textfield__label\" for=\"password1\">Enter your new Password</label></div>';";
        echo "b = b + '<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\"><input class=\"mdl-textfield__input\" type=\"password\" id=\"password2\" name=\"password2\" /><label class=\"mdl-textfield__label\" for=\"password2\">Enter the Password once again</label></div>';";
        echo "b = b + '<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" name=\"resetPwd\" type=\"Submit\"><i class=\"material-icons\">?</i></button>';";
        echo "a.innerHTML = b;";
        echo "</script>";
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
        echo "<script>";
        echo "var a = document.getElementById('op1');";
        echo "var b = '<input type=\"hidden\" name=\"pkid\" value=\"" . $username . "\"><input type=\"hidden\" name=\"uniqid\" value=\"DNR\"><div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\"><input class=\"mdl-textfield__input\" type=\"password\" id=\"password1\" name=\"password1\" /><label class=\"mdl-textfield__label\" for=\"password1\">Enter your new Password</label></div>';";
        echo "b = b + '<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\"><input class=\"mdl-textfield__input\" type=\"password\" id=\"password2\" name=\"password2\" /><label class=\"mdl-textfield__label\" for=\"password2\">Enter the Password once again</label></div>';";
        echo "b = b + '<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" name=\"resetPwd\" type=\"Submit\"><i class=\"material-icons\">?</i></button>';";
        echo "a.innerHTML = b;";
        echo "</script>";
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
        echo "<script>";
        echo "var a = document.getElementById('op1');";
        echo "var b = '<input type=\"hidden\" name=\"pkid\" value=\"" . $username . "\"><input type=\"hidden\" name=\"uniqid\" value=\"MONORG\"><div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\"><input class=\"mdl-textfield__input\" type=\"password\" id=\"password1\" name=\"password1\" /><label class=\"mdl-textfield__label\" for=\"password1\">Enter your new Password</label></div>';";
        echo "b = b + '<div class=\"mdl-textfield mdl-js-textfield mdl-textfield--floating-label\"><input class=\"mdl-textfield__input\" type=\"password\" id=\"password2\" name=\"password2\" /><label class=\"mdl-textfield__label\" for=\"password2\">Enter the Password once again</label></div>';";
        echo "b = b + '<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" name=\"resetPwd\" type=\"Submit\"><i class=\"material-icons\">?</i></button>';";
        echo "a.innerHTML = b;";
        echo "</script>";
      }
      else{
        // display error
      }
    }

  }
?>

<?php
if(isset($_POST['resetPwd'])){
  $uniqid = $_POST['uniqid'];
  $pkid = $_POST['pkid'];
  $newpasswd1 = $_POST['password1'];
  $newpasswd2 = $_POST['password2'];
  if($newpasswd1 == $newpasswd2){
    if($uniqid == "BDC"){
      $query = "UPDATE BDC SET PASSWORD = '" . $newpasswd2 . "' WHERE BDC_ID = '" . $pkid . "';";
      if ($mysqli->query($query) === TRUE) {
        echo "Record created successfully";
        header('Location: index.php');
      } else {
        echo "Error creating record: " . $mysqli->error;
      }
    }
    else if ($uniqid == "EMP"){
      $query = "UPDATE BDC_EMPLOYEE SET PASSWORD = '" . $newpasswd2 . "' WHERE EMP_ID = " . $pkid . ";";
      if ($mysqli->query($query) === TRUE) {
        echo "Record created successfully";
        header('Location: index.php');
      } else {
        echo "Error creating record: " . $mysqli->error;
      }
    }
    else if ($uniqid == "DNR"){
      $query = "UPDATE DONOR SET PASSWORD = '" . $newpasswd2 . "' WHERE DONOR_ID = '" . $pkid . "';";
      if ($mysqli->query($query) === TRUE) {
        echo "Record created successfully";
        header('Location: index.php');
      } else {
        echo "Error creating record: " . $mysqli->error;
      }
    }
    else if ($uniqid == "MONORG"){
      $query = "UPDATE MONETARY_ORGANISATION SET PASSWORD = '" . $newpasswd2 . "' WHERE ORG_ID = " . $pkid . ";";
      if ($mysqli->query($query) === TRUE) {
        echo "Record created successfully";
        header('Location: index.php');
      } else {
        echo "Error creating record: " . $mysqli->error;
      }
    }
  }
}
?>
