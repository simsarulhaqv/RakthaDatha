<?php
echo "a";
require_once("global.php");
echo "a";
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
  echo "Error deleting record: " . $mysqli->error;
}
?>

</table>


</div>
</section>

<?php

		require_once("footer.php");

?>
