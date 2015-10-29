<?php
require_once("global.php");
?>

<?php
require_once("header.php");
?>

<section class="row">
  <div>

    <form name="requestBlood" action="" method="POST">

        <select id="btype" name="btype">
          <option value="">Enter Blood Type</option>
          <option value="O-">O-</option>
          <option value="O+">O+</option>
          <option value="A-">A-</option>
          <option value="A+">A+</option>
          <option value="B-">B-</option>
          <option value="B+">B+</option>
          <option value="AB-">AB-</option>
          <option value="AB+">AB+</option>
        </select>
        <br><br><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="amtblood" name="amtblood" />
          <label class="mdl-textfield__label" for="amtblood">Amount of Blood required</label>
          <span class="mdl-textfield__error">error message</span>
        </div>
        <br><br><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="date" name="dor" id="dor" />
        <!--  <label class="mdl-textfield__label" for="dor">Date of requirement</label> -->
        </div>
        <br><br><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="fname" name="fname" />
          <label class="mdl-textfield__label" for="fname">First Name</label>
        </div>
        <br><br><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="lname" name="lname" />
          <label class="mdl-textfield__label" for="lname">Last Name</label>
        </div>
        <br><br><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="mobno" name="mobno" />
          <label class="mdl-textfield__label" for="mobno">Mobile Number</label>
        </div>
        <br><br><br>

        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="email" name="email" />
          <label class="mdl-textfield__label" for="email">E Mail</label>
        </div>
        <br><br><br>

        <select id="city" name="city">
          <option value="">Enter City</option>
          <?php
            $qry = "SELECT * FROM CITY_STATE;";
            $res = $mysqli->query($qry);
            if($res->num_rows <= 0){

            }
            else{
              while($row = $res->fetch_assoc()){
                echo "<option value=\"" . $row["STATE_ABBR"] . "\">" . $row['CITY'] . "</option>";
              }
            }
          ?>
        </select>
        <br><br><br>

    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" type="Submit">
      request Blood
    </button>

    </form>

  </div>
</section>

<?php
require_once("footer.php");
?>

<?php
if((empty($_POST['btype'])) && (empty($_POST['amtblood'])) && (empty($_POST['dor'])) && (empty($_POST['fname'])) && (empty($_POST['lname'])) && (empty($_POST['mobno'])) && (empty($_POST['email'])) && (empty($_POST['city']))){

}
else{
  $btype = $_POST['btype'];
  $amtblood = $_POST['amtblood'];
  $dor = $_POST['dor'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mobno = $_POST['mobno'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  $the_real_city = "";
  $query2 = "SELECT * FROM CITY_STATE WHERE STATE_ABBR = '" . $city . "';";
  $result2 = $mysqli->query($query2);
  if($result2->num_rows == 1){
    $row = $result2->fetch_assoc();
    $therealcity = $row['CITY'];
  }
  else{
    // error
  }

  $query1 = "SELECT * FROM RECEIVER;";
  $result1 = $mysqli->query($query1);
  $cur_pres = $result1->num_rows;
  $rcvid = $cur_pres + 1;

  $query = "INSERT INTO RECEIVER VALUES(" . $rcvid . ",'" . $fname . "','" . $lname . "','" . $btype . "','" . $email . "','" . $mobno ."','" . $amtblood ."','" . $dor . "','" . $therealcity . "');";
  // incomplete NOT working

  if ($mysqli->query($query) === TRUE) {
    //echo "Record created successfully";
    echo "<h2>IMPORTANT INFO </h2> <br>";
    $query3 = "SELECT BDC.BDC_NAME, BDC_BLOOD_AVAILABLITY.BLOOD_GROUP, BDC_BLOOD_AVAILABLITY.BLOOD_AVAILABLE FROM BDC, RECEIVER, BDC_BLOOD_AVAILABLITY WHERE BDC.CITY = RECEIVER.CITY AND BDC_BLOOD_AVAILABLITY.BDC_ID = BDC.BDC_ID;";
    $result3 = $mysqli->query($query3);

    echo "Respected " . $fname . " " . $lname . ",<br>";

    echo "Your unique ID in the RakthaDatha database is : <strong>" . $rcvid . "</strong><br>";

    echo "Please go to any of the following Blood donation Centres <br>";
    echo "and tell them your Identification Details. <br><br>";

    echo "<table><tr><th>BDC NAME</th><th>BLOOD GROUP</th><th>AVAILABLE QUANTITY</th></tr>";
    while($row = $result3->fetch_assoc()){
      echo "<tr>";
      echo "<td>" . $row["BDC_NAME"] . "</td><td>" . $row["BLOOD_GROUP"] . "</td><td>" . $row["BLOOD_AVAILABLE"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "<br><hr>";
    //echo "redirecting to main page in 10 seconds . . .<br>";
    //echo "<meta http-equiv=\"refresh\" content=\"10; index.php\">";

  } else {
    echo "Error creating record: " . $mysqli->error;
  }

}
?>
