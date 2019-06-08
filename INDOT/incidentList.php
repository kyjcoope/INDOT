<?php
	$db = pg_connect("host=localhost port=5432 dbname=test user=indot password=bagel");
	$result = pg_query($db,"SELECT * FROM traffic");
	echo "<table class='fixed_header'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th><form><input type='button' value='ID' onclick='sortTable(0)' style='width: 100%'></form></th>";
	echo "<th><form><input type='button' value='Road' onclick='sortTable(1)' style='width: 100%'></form></th>";
	echo "<th><form><input type='button' value='Lat' onclick='sortTable(2)' style='width: 100%'></form></th>";
	echo "<th><form><input type='button' value='Lon' onclick='sortTable(3)' style='width: 100%'></form></th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while($row=pg_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['road']."</td>";
		echo "<td>".$row['lat']."</td>";
		echo "<td>".$row['lon']."</td>";
		echo "</tr>";}
		echo "</tbody>";
		echo "</table>";
pg_close($db);
?>
