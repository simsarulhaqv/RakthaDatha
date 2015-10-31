<section class="row">
  <div class="photo-grid">

<h3 style="color:#D50000;">BLOOD DONATION CENTRE DETAILS</h3>
<br><br><br>

    <form name="qry3" id="qry3" method="POST">

      Which city
    <!--
      <select id="city" name="city">
        <option value="">CITY</option>
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
    -->
      has

      <select id="maxmin" name="maxmin">
        <option value="max">maximum</option>
        <option value="min">minimum</option>
      </select>

      amount of

      <select id="btype" name="btype">
        <option value="">blood group</option>
        <option value="O-">O-</option>
        <option value="O+">O+</option>
        <option value="A-">A-</option>
        <option value="A+">A+</option>
        <option value="B-">B-</option>
        <option value="B+">B+</option>
        <option value="AB-">AB-</option>
        <option value="AB+">AB+</option>
      </select>

      <input type="Submit" value="?" name="qry3">

      <div id="res3">

      </div>

    </form>

    <br><br><br>


  </div>
</section>

<?php
if(isset($_POST['qry3'])){
  if((!isset($_POST['maxmin'])) && (!isset($_POST['btype']))){

  }
  else{

    $maxmin = $_POST['maxmin'];
    $btype = $_POST['btype'];

    $query3 = "";

    if($maxmin == 'max'){
      $query3 = "SELECT * FROM BDC,BDC_BLOOD_AVAILABLITY WHERE BDC.BDC_ID = BDC_BLOOD_AVAILABLITY.BDC_ID ORDER BY BDC_BLOOD_AVAILABLITY.BLOOD_AVAILABLE DESC;";
    }
    if($maxmin == 'min'){
      $query3 = "SELECT * FROM BDC,BDC_BLOOD_AVAILABLITY WHERE BDC.BDC_ID = BDC_BLOOD_AVAILABLITY.BDC_ID ORDER BY BDC_BLOOD_AVAILABLITY.BLOOD_AVAILABLE ASC;";
    }
    $result = $mysqli->query($query3);
    $row = $result->fetch_assoc();

    echo "<script>";
    echo "var a = document.getElementById('res3');";
    echo "var b = 'CITY : " . $row['CITY'] . "';";
    echo "a.innerHTML = b;";
    echo "</script>";

  }
}
?>
