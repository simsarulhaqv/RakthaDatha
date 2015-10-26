<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>


<section class="row">
  <div class="photo-grid">

<h3 style="color:#D50000;">EMPLOYEE DETAILS</h3>
<br><br><br>

<table class="mdl-data-table mdl-js-data-table">
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
      <label class="mdl-textfield__label" for="city">enter bdc id</label>
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
      <label class="mdl-textfield__label" for="doj">enter date of join</label>
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

    <section class="row">
      <div class="photo-grid">

<h3 style="color:#D50000;">DONOR DETAILS</h3>
<br><br><br>

<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
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
      ?>
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
  <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="text" id="btype" name="btype" />
      <label class="mdl-textfield__label" for="btype">enter blood type</label>
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
  <div class="mdl-textfield mdl-js-textfield">
      <input class="mdl-textfield__input" type="text" id="city" name="city" />
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

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Blood Type');
        data.addColumn('number', 'Number of Donors');

        <?php
          $qry = "select BLOOD_TYPE,COUNT(DONOR_ID) from DONOR GROUP BY BLOOD_TYPE;";
          $rslt = $mysqli->query($qry);
          if ($rslt->num_rows <= 0) {
            echo "Error getting record: " . $mysqli->error;
        ?>
        <div class="info message">
          <p>no such record exists</p>
        </div>
        <?php
          }
          else {
            echo "data.addRows([";
            $value = array();
            while($row = $rslt->fetch_assoc()) {
              $val = "['".$row["BLOOD_TYPE"]."', ".$row["COUNT(DONOR_ID)"]."]";
					    array_push($value,$val);
            }
            echo implode(",", $value);
            echo "])";
          }
        ?>

        // Set chart options
        var options = {'title':'Blood Types of Donors'/*,
                       'width':400,
                       'height':300*/};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <!--Div that will hold the pie chart-->
    <div id="chart_div">

    </div>

    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Blood Type');
        data.addColumn('number', 'Number of Donors');

        <?php
          $qry = "SELECT CITY_STATE.CITY, BLOOD_GROUP, BLOOD_AVAILABLE FROM BDC, BDC_BLOOD_AVAILABLITY,CITY_STATE WHERE BDC.BDC_ID = BDC_BLOOD_AVAILABLITY.BDC_ID AND BDC.CITY = CITY_STATE.CITY;";
          $rslt = $mysqli->query($qry);
          if ($rslt->num_rows <= 0) {
            echo "Error getting record: " . $mysqli->error;
        ?>
            <div class="info message">
              <p>no such record exists</p>
            </div>
        <?php
          }
          else {
            echo "data.addRows([";
            $value = array();
            while($row = $rslt->fetch_assoc()) {
              $val = "['".$row["CITY"]." ".$row["BLOOD_GROUP"]."', ".$row["BLOOD_AVAILABLE"]."]";
              array_push($value,$val);
            }
            echo implode(",", $value);
            echo "])";
          }
        ?>

        // Set chart options
        var options = {'title':'Blood Distribution in different Cities In India'/*,
                       'width':400,
                       'height':300*/};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div_2'));
        chart.draw(data, options);
      }
    </script>

    <!--Div that will hold the pie chart-->
    <div id="chart_div_2">

    </div>


<?php
require_once("footer.php");
?>
