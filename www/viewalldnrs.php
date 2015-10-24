<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

    <section class="row">
      <div class="photo-grid">

<table>
  <tr>
    <th>DONOR_ID</th><th>F_NAME</th><th>L_NAME</th><th>PASSWORD</th><th>BLOOD_TYPE</th><th>MOBILE_NUMBER</th><th>E_MAIL</th><th>CITY</th><th></th>
  </tr>
<?php

$query = "SELECT * FROM DONOR;";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
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
      echo "<td>";
      echo "delete_icon_here";
      echo "</td>";
      echo "</tr>":

  }
} else {
  echo "Error getting record: " . $mysqli->error;
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
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <!--Div that will hold the pie chart-->
    <div id="chart_div">

    </div>

<?php
require_once("footer.php");
?>
