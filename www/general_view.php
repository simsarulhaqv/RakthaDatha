<?php
require_once("global.php");
?>
<?php
require_once("header.php");
?>

<?php
  $username = $_SESSION['username'];
  $tablename = $_SESSION['tname'];
  if(empty($tablename)){
    header('Location: login.php');
  }
  else{
    if($tablename == "ADMIN"){
      // assumption : only one admin
      //echo "admin";
?>
      <div class="info message">
        <p>admin control panel</p>
      </div>
      <br><br><br>

    <?php

      require_once('empdetails.php');
      require_once('emp_queries.php');
      require_once('bdcdetails.php');
      require_once('bdc_queries.php');
      require_once('donordetails.php');
      require_once('graph1.php');
      require_once('monorgdetails.php');
      require_once('graph2.php');

    ?>
    <?php
    }
    elseif ($tablename == "BDC") {
    ?>
    <div class="info message">
      <p>bdc control panel</p>
    </div>
    <br><br><br>
    <?php
    }
    elseif ($tablename == "EMP") {
      ?>
      <div class="info message">
        <p>bdc employee control panel</p>
      </div>
      <br><br><br>
      <?php
    }
    elseif ($tablename == "DNR") {
      ?>
      <div class="info message">
        <p>donor control panel</p>
      </div>
      <br><br><br>
      <?php
    }
    elseif ($tablename == "MONORG") {
      ?>
      <div class="info message">
        <p>mon org control panel</p>
      </div>
      <br><br><br>
      <?php
    }
    else{
      header('Location: logout.php');
    }
  }
    ?>

<?php
require_once("footer.php");
?>
