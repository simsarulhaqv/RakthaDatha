<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

<div class="row">

  <div class="col-md-6" id="dnrsignup">

    <h3 style="color:#D50000;">Register as DONOR</h3>

    <form method="POST" id="frmdnr">

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="fname" name="fname" />
        <label class="mdl-textfield__label" for="fname">enter first name</label>
      </div>

      <br><br><br>

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="lname" name="lname" />
        <label class="mdl-textfield__label" for="lname">enter last name</label>
      </div>

      <br><br><br>

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="email" id="email" name="email" />
        <label class="mdl-textfield__label" for="email">enter e mail address</label>
      </div>

      <br><br><br>

      <div>
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
      </div>

      <br><br><br>

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="mobno" name="mobno" />
        <label class="mdl-textfield__label" for="mobno">enter mobile number</label>
      </div>

      <br><br><br>

      <div>
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
        <!--  <input class="mdl-textfield__input" type="text" id="city" name="city" /> -->
        <!--  <label class="mdl-textfield__label" for="city">enter city</label> -->
      </div>

      <br><br><br>

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="password" id="password" name="password" />
        <label class="mdl-textfield__label" for="password">enter password</label>
        <span class="mdl-textfield__error" style="width:100px;display:inline;">
          <div id="meter" style="background-color:white;width:5px;height:10px;"></div>
          <div id="strength"></div>
        </span>
      </div>

      <br><br><br>

      <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" onclick="reg_donor()">
        Register As Donor
      </button>

      <br><br><br>

    </form>
  </div>

<!-- donor end-->

  <div class="col-md-6" id="monorgsignup">

    <h3 style="color:#D50000;">Register as <br><br> MONETARY ORGANISATION</h3>

    <form method="POST" id="frmmonorg">

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="orgname" name="orgname" />
        <label class="mdl-textfield__label" for="orgname">enter org name</label>
      </div>

      <br><br><br>

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" id="cname" name="cname" />
        <label class="mdl-textfield__label" for="cname">enter contact name</label>
      </div>

      <br><br><br>

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="email" id="email" name="email" />
        <label class="mdl-textfield__label" for="email">enter e mail address</label>
      </div>

      <br><br><br>

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="mobno" name="mobno" />
        <label class="mdl-textfield__label" for="mobno">enter mobile number</label>
      </div>

      <br><br><br>

      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="password" id="password" name="password" />
        <label class="mdl-textfield__label" for="password">enter password</label>
  <span class="mdl-textfield__error" style="width:100px;display:inline;">
    <div id="meter" style="background-color:white;width:5px;height:10px;"></div>
    <div id="strength"></div>
  </span>
</div>
<br><br><br>

<!-- Accent-colored raised button -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" onclick="reg_monorg()">
  Register As Monetary Organisation
</button>

<br><br><br>

</form>
</div>
</div>

<?php
require_once("footer.php");
?>
