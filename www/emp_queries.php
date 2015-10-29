<section class="row">
  <div class="photo-grid">

    <form name="qry1" id="qry1" method="POST">
      <select id="city1" name="city1" onchange="change_city()">
        <option value="">Select your City</option>
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

      <select id="bdc1" name="bdc1">
        <option value="">Select a BDC</option>
      </select>

      <input type="Submit" value="get employee details">

      <div id="res1">

      </div>

    </form>

    <script>
    function change_city(){
      var a = document.getElementById('bdc1');
      var stateabbr = document.getElementById('city1').value;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          a.innerHTML = xhttp.responseText;
          /*location.reload(); */
        }
      }
      xhttp.open("POST", "list_bdc_city.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("stateabbr="+stateabbr);
    }
    </script>

    <form name="qry2" id="qry2" method="POST" action="count_emp_city.php">
      <select id="city2" name="city2">
        <option value="">Select your City</option>
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

      <input type="Submit" value="get number of employee">

      <div id="res2">

      </div>

    </form>

  </div>
</section>

<?php
if((!isset($_POST['city1'])) && (!isset($_POST['bdc1']))){
  //die();
}
else{
  $stateabbr = $_POST['city1'];
  $bdcid = $_POST['bdc1'];
  $the_real_city = "";
  $query2 = "SELECT * FROM CITY_STATE WHERE STATE_ABBR = '" . $stateabbr . "';";
  $result2 = $mysqli->query($query2);
  if($result2->num_rows == 1){
    $row = $result2->fetch_assoc();
    $the_real_city = $row['CITY'];
  }
  else{
    // error
  }
  $query1 = "SELECT * FROM BDC_EMPLOYEE WHERE BDC_ID = '" . $bdcid . "';";
  $result = $mysqli->query($query1);
  echo "<script>";
  echo "var a = document.getElementById('res1');";

  echo "var b = '<table class=\"mdl-data-table mdl-js-data-table\"><thead><tr>';";
  echo "b = b + '<th>EMP ID</th><th>BDC ID</th><th>F NAME</th><th>L NAME</th><th>DESIGNATION</th><th>DATE OF JOIN</th><th>SALARY</th></tr></thead><tbody>';";
  while($row = $result->fetch_assoc()){
    echo "b = b + '<tr>';";
    echo "b = b + '" . $row["EMP_ID"] . "';";
    echo "b = b + '</tr>';";
    echo "b = b + '<tr>';";
    echo "b = b + '" .$row["BDC_ID"] . "';";
    echo "b = b + '</tr>';";
    echo "b = b + '<tr>';";
    echo "b = b + '" .$row["F_NAME"] . "';";
    echo "b = b + '</tr>';";
    echo "b = b + '<tr>';";
    echo "b = b + '" .$row["L_NAME"] . "';";
    echo "b = b + '</tr>';";
    echo "b = b + '<tr>';";
    echo "b = b + '" .$row["DESIGNATION"] . "';";
    echo "b = b + '</tr>';";
    echo "b = b + '<tr>';";
    echo "b = b + '" .$row["DATE_OF_JOIN"] . "';";
    echo "b = b + '</tr>';";
    echo "b = b + '<tr>';";
    echo "b = b + '" .$row["SALARY"] . "';";
    echo "b = b + '</tr>';";
  }
  echo "b = b + '</tbody></table>';";
  echo "a.innerHTML = b;";
  echo "</script>";
}
?>

<?php
if(!isset($_POST['city2'])){
  die();
}
else{
  $stateabbr = $_POST['city2'];
  $the_real_city = "";
  $query2 = "SELECT * FROM CITY_STATE WHERE STATE_ABBR = '" . $stateabbr . "';";
  $result2 = $mysqli->query($query2);
  if($result2->num_rows == 1){
    $row = $result2->fetch_assoc();
    $the_real_city = $row['CITY'];
  }
  else{
    // error
  }
  $query1 = "SELECT COUNT(BDC_EMPLOYEE.EMP_ID) FROM BDC, BDC_EMPLOYEE WHERE CITY = '" . $the_real_city . "' AND BDC.BDC_ID = BDC_EMPLOYEE.BDC_ID;";
  $result = $mysqli->query($query1);
  $row = $result->fetch_assoc();
  echo "<script>";
  echo "var a = document.getElementById('res2');";
  echo "var b = 'Number of employees : "$row['COUNT(BDC_EMPLOYEE.EMP_ID)'] . "';";
  echo "a.innerHTML = b;"
  echo "</script>";
}
?>
