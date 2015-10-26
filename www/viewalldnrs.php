<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

    <section class="row">
      <div class="photo-grid">

<table border="3">
  <tr>
    <th>DONOR_ID</th>
    <th>F_NAME</th>
    <th>L_NAME</th>
    <th>BLOOD_TYPE</th>
    <th>MOBILE_NUMBER</th>
    <th>E_MAIL</th>
    <th>CITY</th>
    <?php
      if($_SESSION['username'] == "root"){
        // assumption only one admin
        echo "<th></th>";
      }
    ?>

  </tr>
<?php

$qry = "SELECT DONOR_ID,BLOOD_TYPE,MOBILE_NUMBER,E_MAIL,F_NAME,L_NAME,CITY FROM DONOR;";
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
      echo $row['CITY'];
      echo "</td>";
      if($_SESSION['username'] == "root"){
        echo "<td>";
        echo "<button class=\"mdl-button mdl-js-button mdl-button--fab mdl-button--colored\" onclick=\"remdonor_adminactions('" . $row['DONOR_ID'] . "','" . $row['MOBILE_NUMBER'] . "')\"><i class=\"material-icons\">X</i></button>";
        echo "</td>";
      }
      echo "</tr>";
  }

}
?>

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
