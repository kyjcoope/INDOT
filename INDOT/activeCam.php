<?php
	$lat = $_GET["lat"];
	$lon = $_GET["lon"];
	define('DB_SERVER', 'sasrdsmp01.uits.iu.edu');
	define('DB_USERNAME', 's13487g3_INDOT');
	define('DB_PASSWORD', '$INdotProject11$');
	define('DB_NAME', 's13487g3_INDOT');
	/* Attempt to connect to MySQL database */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$result = $link->query("SELECT url FROM test WHERE lat='".$lat."' AND lon='".$lon."'") or die("Bad Query: $sql");
	while($row=mysqli_fetch_assoc($result)){
		echo "http://".$row['url']."/mjpg/video.mjpg";}

	mysqli_close($link);
?>