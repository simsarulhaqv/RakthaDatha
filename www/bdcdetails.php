
<section class="row">
  <div class="photo-grid">

<h3 style="color:#D50000;">BLOOD DONATION CENTRE DETAILS</h3>
<br><br><br>

<table class="mdl-data-table mdl-js-data-table">
<thead>
<tr>
<th>BDC ID</th>
<th>BDC NAME</th>
<th>MGR ID</th>
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

$qry = "SELECT * FROM BDC;";
$rslt = $mysqli->query($qry);

if ($rslt->num_rows <= 0) {

echo "Error getting record: " . $mysqli->error;

} else {

// output data of each row
while($row = $rslt->fetch_assoc()) {
  echo "<tr>";
  echo "<td>";
  echo $row['BDC_ID'];
  echo "</td>";
  echo "<td>";
  echo $row['BDC_NAME'];
  echo "</td>";
  echo "<td>";
  echo $row['MGR_ID'];
  echo "</td>";
  echo "<td>";
  echo $row['CITY'];
  echo "</td>";
  if($_SESSION['username'] == "root"){
    echo "<td>";
    echo "<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" onclick=\"rembdc_adminactions('" . $row['BDC_ID'] . "','" . $row['BDC_NAME'] . "')\"><i class=\"material-icons\">X</i></button>";
    echo "</td>";
  }
  echo "</tr>";
}

}
?>
<tr>
<form method="POST" action="addbdc.php">
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
      <input class="mdl-textfield__input" type="text" id="bdcname" name="bdcname" />
      <label class="mdl-textfield__label" for="bdcname">enter bdc name</label>
  </div>
</td>

<td>
  <div>
    <select id="mgrid" name="mgrid">
      <?php
        $qry = "SELECT * FROM BDC_EMPLOYEE;";
        $res = $mysqli->query($qry);
        if($res->num_rows <= 0){

        }
        else{
          while($row = $res->fetch_assoc()){
            echo "<option value=\"" . $row["EMP_ID"] . "\">" . $row['F_NAME'] . $row["L_NAME"] . "</option>";
          }
        }
      ?>
    </select>
    <!--  <input class="mdl-textfield__input" type="text" id="city" name="city" /> -->
      <label class="mdl-textfield__label" for="city">enter mgr id</label>
  </div>
</td>

<td>
  <div>
    <select id="city" name="city">
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
