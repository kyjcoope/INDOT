<?php

define('DB_SERVER', 'sasrdsmp01.uits.iu.edu');
define('DB_USERNAME', 's13487g3_INDOT');
define('DB_PASSWORD', '***');
define('DB_NAME', 's13487g3_INDOT');
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql = "SELECT * from test_incident";
$result = $link->query($sql) or die("Bad Query: $sql");
echo "<table class='fixed_header' id='vmenu_table'>";
echo "<thead>";
echo "<tr>";
echo "<th><form><input type='button' value='Loc/MM' onclick='sortTable(0)' style='width: 100%'></form></th>";
echo "<th><form><input type='button' value='CamID' onclick='sortTable(1)' style='width: 100%'></form></th>";
echo "<th><form><input type='button' value='Time' onclick='sortTable(2)' style='width: 100%'></form></th>";
echo "<th><form><input type='button' value='Flow/Dens' onclick='sortTable(3)' style='width: 100%'></form></th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while($row = mysqli_fetch_assoc($result)){
  echo"<tr><td>{$row['road']}/{$row['milemarker']}</td><td>{$row['camid']}</td><td>{$row['start_time']}</td><td>{$row['flow_rate']}/{$row['density']}</td></tr>";

}
echo "</tbody>";
echo"</table>";
mysqli_close($link);
?>
