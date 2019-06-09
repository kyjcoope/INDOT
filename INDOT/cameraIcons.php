<?php
	define('DB_SERVER', 'sasrdsmp01.uits.iu.edu');
	define('DB_USERNAME', 's13487g3_INDOT');
	define('DB_PASSWORD', '***');
	define('DB_NAME', 's13487g3_INDOT');
	/* Attempt to connect to MySQL database */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$result = $link->query("SELECT * FROM test") or die("Bad Query: $link");
	while($row=mysqli_fetch_assoc($result)){
		echo "L.marker([".$row['lat'].",".$row['lon']."], {icon: greenIcon}).addTo(mymap).on('click', onClick);";
	}
	mysqli_close($link);
?>
