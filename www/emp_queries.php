<section class="row">
  <div class="photo-grid">

    <form name="qry1" id="qry1" method="POST">
      <select id="city1" name="city" onchange="change_city_1()">
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

      <select id="bdc" name="bdc">
        <option value="">Select a BDC</option>
      </select>

      <input type="Submit" value="get employee details" name="qry1">

      <div id="res1">

      </div>

    </form>

<br><br><br>

    <script>
    function change_city_1(){
      var a = document.getElementById('bdc');
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

    <form name="qry2" id="qry2" method="POST">
      <select id="city" name="city">
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

      <input type="Submit" value="get number of employee" name="qry2">

      <div id="res2">

      </div>

    </form>

<br><br><br>

<form name="qry4" id="qry4" method="POST">
  <select id="city4" name="city" onchange="change_city_4()">
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

  <select id="bdc4" name="bdc">
    <option value="">Select a BDC</option>
  </select>

  <input type="Submit" value="get the most experienced employee" name="qry4">

  <div id="res4">

  </div>

</form>

<script>
function change_city_4(){
  var a = document.getElementById('bdc4');
  var stateabbr = document.getElementById('city4').value;
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

<br><br><br>

  </div>
</section>

<?php
if(isset($_POST['qry1'])){
if((!isset($_POST['city'])) && (!isset($_POST['bdc']))){
  //die();
}
else{
  $stateabbr = $_POST['city'];
  $bdcid = $_POST['bdc'];
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
}
?>

<?php
if(isset($_POST['qry2'])){
if(!isset($_POST['city'])){
  //die();
}
else{
  $stateabbr = $_POST['city'];
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
  echo "var b = 'Number of employees : " . $row['COUNT(BDC_EMPLOYEE.EMP_ID)'] . "';";
  echo "a.innerHTML = b;";
  echo "</script>";
}
}
?>

<?php
  if(isset($_POST['qry4'])){
    if((!isset($_POST['city'])) && (!isset($_POST['bdc']))){

    }
    else{
      $stateabbr = $_POST['city'];
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
      $bdcid = $_POST['bdc'];

      $query4 = "SELECT * FROM BDC, BDC_EMPLOYEE WHERE CITY = '" . $the_real_city . "' AND BDC.BDC_ID = BDC_EMPLOYEE.BDC_ID ORDER BY BDC_EMPLOYEE.DATE_OF_JOIN ASC;";
      $result = $mysqli->query($query4);
      $row = $result->fetch_assoc();
      echo "<script>";
      echo "var a = document.getElementById('res4');";
      echo "var b = 'Employee with highest experience : " . $row['F_NAME'] . " " . $row["L_NAME"] . "';";
      echo "a.innerHTML = b;";
      echo "</script>";

    }
  }
?>
