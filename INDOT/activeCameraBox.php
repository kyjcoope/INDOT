<?php
	$cameraid = $_GET["id"];
	$table = $_GET["table"];
	define('DB_SERVER', 'sasrdsmp01.uits.iu.edu');
	define('DB_USERNAME', 's13487g3_INDOT');
	define('DB_PASSWORD', '***');
	define('DB_NAME', 's13487g3_INDOT');
	/* Attempt to connect to MySQL database */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$result = $link->query("SELECT * FROM $[table] where $[cameraid] = id") or die("Bad Query: $sql");
	while($row=mysqli_fetch_assoc($result)){
		echo "<id=".$row['id'].", road=".$row['road'].", lat=".$row['lat'].", long=".$row['long'].", flow=".$row['flow'].", density=".$row['density'].", start=".$row['start'].", stop=".$row['$stop'].", road_cond=".$row['road_cond'].">";
		}

	mysqli_close($link);
?>

<script>
function getClickedCam(id,table) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
			updateLiveFeed(this.responseText);
		}
	};
	xmlhttp.open("GET","activeCameraBox.php?id="+id+"&table="+table,true);
	xmlhttp.send();
}
</script>
