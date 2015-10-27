<section class="row">
  <div class="photo-grid">

<h3 style="color:#D50000;">EMPLOYEE DETAILS</h3>
<br><br><br>

<table class="mdl-data-table mdl-js-data-table full-width">
<thead>
<tr>
<th>EMPLOYEE ID</th>
<th>BDC ID</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>DESIGNATION</th>
<th>DATE OF JOIN</th>
<th>SALARY</th>
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

$qry = "SELECT * FROM BDC_EMPLOYEE;";
$rslt = $mysqli->query($qry);

if ($rslt->num_rows <= 0) {

echo "Error getting record: " . $mysqli->error;

} else {

// output data of each row
while($row = $rslt->fetch_assoc()) {
  echo "<tr>";
  echo "<td>";
  echo $row['EMP_ID'];
  echo "</td>";
  echo "<td>";
  echo $row['BDC_ID'];
  echo "</td>";
  echo "<td>";
  echo $row['F_NAME'];
  echo "</td>";
  echo "<td>";
  echo $row['L_NAME'];
  echo "</td>";
  echo "<td>";
  echo $row['DESIGNATION'];
  echo "</td>";
  echo "<td>";
  echo $row['DATE_OF_JOIN'];
  echo "</td>";
  echo "<td>";
  echo $row['SALARY'];
  echo "</td>";
  if($_SESSION['username'] == "root"){
    echo "<td>";
    echo "<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" onclick=\"rememp_adminactions('" . $row['EMP_ID'] . "','" . $row['BDC_ID'] . "')\"><i class=\"material-icons\">X</i></button>";
    echo "</td>";
  }
  echo "</tr>";
}

}
?>

<tr>

<form method="POST" action="addbdcemp.php">
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
  <div>
    <select id="bdcid" name="bdcid">
      <option value="">Enter BDC ID</option>
      <?php
        $qry = "SELECT * FROM BDC;";
        $res = $mysqli->query($qry);
        if($res->num_rows <= 0){

        }
        else{
          while($row = $res->fetch_assoc()){
            echo "<option value=\"" . $row["BDC_ID"] . "\">" . $row['BDC_NAME'] . "</option>";
          }
        }
      ?>
    </select>
    <!--  <input class="mdl-textfield__input" type="text" id="city" name="city" /> -->
    <!--  <label class="mdl-textfield__label" for="city">enter bdc id</label> -->
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
  <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="text" id="desig" name="desig" />
      <label class="mdl-textfield__label" for="desig">enter designation</label>
  </div>
</td>
<td>
  <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="date" id="doj" name="doj" />
      <!--<label class="mdl-textfield__label" for="doj">enter date of join</label>-->
  </div>
</td>
<td>
  <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="text" id="sal" name="sal" />
      <label class="mdl-textfield__label" for="sal">enter salary</label>
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
