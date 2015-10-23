<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

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

              <?php
}
?>

          </div>
</section>

<?php
require_once("footer.php");
?>
