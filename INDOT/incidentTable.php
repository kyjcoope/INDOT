<?php

define('DB_SERVER', 'sasrdsmp01.uits.iu.edu');
define('DB_USERNAME', 's13487g3_INDOT');
define('DB_PASSWORD', '***');
define('DB_NAME', 's13487g3_INDOT');
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql = "SELECT * from test_incident";
$result = $link->query($sql) or die("Bad Query: $sql");
$data = array();
while($rows = mysqli_fetch_assoc($result)){
	$data[] = $rows;
}
echo json_encode($data);
mysqli_close($link);
?>
