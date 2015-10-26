<section class="row">
  <div class="photo-grid">

<h3 style="color:#D50000;">DONOR DETAILS</h3>
<br><br><br>

<table class="mdl-data-table mdl-js-data-table">
<thead>
<tr>
<th>DONOR ID</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>BLOOD TYPE</th>
<th>MOBILE NUMBER</th>
<th>E MAIL</th>
<th>CITY</th>

<?php
  if($_SESSION['username'] == "root"){
    // assumption only one admin
    echo "<th></th>";
  }
?>

</tr>
</thead>
<tbody>
<?php

$qry = "SELECT * FROM DONOR;";
$rslt = $mysqli->query($qry);

if ($rslt->num_rows <= 0) {

echo "Error getting record: " . $mysqli->error;

} else {

// output data of each row
while($row = $rslt->fetch_assoc()) {
  echo "<tr>";
  echo "<td>";
  echo $row['DONOR_ID'];
  echo "</td>";
  echo "<td>";
  echo $row['F_NAME'];
  echo "</td>";
  echo "<td>";
  echo $row['L_NAME'];
  echo "</td>";
  echo "<td>";
  echo $row['BLOOD_TYPE'];
  echo "</td>";
  echo "<td>";
  echo $row['MOBILE_NUMBER'];
  echo "</td>";
  echo "<td>";
  echo $row['E_MAIL'];
  echo "</td>";
  echo "<td>";
  echo $row["CITY"];
  echo "</td>";

  ?>

  <?php
  if($_SESSION['username'] == "root"){
    echo "<td>";
    echo "<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" onclick=\"remdonor_adminactions('" . $row['DONOR_ID'] . "','" . $row['MOBILE_NUMBER'] . "')\"><i class=\"material-icons\">X</i></button>";
    echo "</td>";
  }
  echo "</tr>";
}

}
?>
<tr>
<form method="POST" action="addnewdonor.php">
<td>
<div class="mdl-textfield mdl-js-textfield">
  <input class="mdl-textfield__input" type="password" id="password" name="password" />
  <label class="mdl-textfield__label" for="password">enter password</label>
  <span class="mdl-textfield__error" style="width:100px;display:inline;">
    <div id="meter" style="background-color:white;width:5px;height:10px;"></div>
    <div id="strength"></div>
  </span>
</div>
</td>
<td>
<div class="mdl-textfield mdl-js-textfield">
  <input class="mdl-textfield__input" type="text" id="fname" name="fname" />
  <label class="mdl-textfield__label" for="fname">enter first name</label>
</div>
</td>
<td>
<div class="mdl-textfield mdl-js-textfield">
  <input class="mdl-textfield__input" type="text" id="lname" name="lname" />
  <label class="mdl-textfield__label" for="lname">enter last name</label>
</div>
</td>
<td>
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
</td>
<td>
<div class="mdl-textfield mdl-js-textfield">
  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="mobno" name="mobno" />
  <label class="mdl-textfield__label" for="mobno">enter mobile number</label>
</div>
</td>
<td>
<div class="mdl-textfield mdl-js-textfield">
  <input class="mdl-textfield__input" type="text" id="email" name="email" />
  <label class="mdl-textfield__label" for="email">enter e mail address</label>
</div>
</td>
<td>
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
      <label class="mdl-textfield__label" for="city">enter city</label>
  </div>
</td>
<td>
<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" type="Submit">
<i class="material-icons">+</i>
</button>
</td>

</form>
</tr>
</tbody>
</table>

</div>
</section>
