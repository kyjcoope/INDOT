<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="style.css?v=1.1">	
</head>
<body style = "background-color:lightgrey" onload="startUp(); startTime(); setInterval(onTimerElapsed, 10000);">
	<div class="navbar">
		<div id="txt" class="txt" style="color: white"></div>
		<div class="title">INDOT Traffic Monitoring System</div>
		<div class="logo">
			<svg data-name="IN.gov Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 32.26" height="32" width="120" class="logo"><defs><style>.cls-1{fill:#fff;}</style></defs><title>IN.gov</title><path class="cls-1" d="M20.21.1,9.8,0A3.6,3.6,0,0,0,8.53.26L6.81,1A.91.91,0,0,1,6.45,1,.86.86,0,0,1,6.15,1l-1-.45A.84.84,0,0,0,4.2.68a.88.88,0,0,0-.26.63L3.63,24a1.63,1.63,0,0,1-.25.75L1,28a3.65,3.65,0,0,0-.53,1.18L0,31.28a.83.83,0,0,0,.13.7.73.73,0,0,0,.57.28,1,1,0,0,0,.31,0l2.71-.83a1.3,1.3,0,0,1,.7.05L5.58,32a1.25,1.25,0,0,0,.51.12A1.37,1.37,0,0,0,7,31.77l.61-.56a.82.82,0,0,1,.49-.16h.07l.9.18.19,0a1.2,1.2,0,0,0,1.11-.7l.28-.65a.15.15,0,0,1,.17-.07l1.94.68a1.11,1.11,0,0,0,.34.06,1.18,1.18,0,0,0,1-.57l.32-.55a3.91,3.91,0,0,1,.61-.75l1.57-1.41a1.59,1.59,0,0,0,.46-1.37L17,25.57h0a2.72,2.72,0,0,0,1.35,0l1.88-.53a.82.82,0,0,0,.45-1.34L20.18,23a.08.08,0,0,1,0-.07.09.09,0,0,1,0-.06l.31-.23a1.76,1.76,0,0,0,.64-1.28l.07-20.19A1,1,0,0,0,20.21.1Zm61.61,2H78.65A.61.61,0,0,0,78,2.7a.61.61,0,0,1-1,.47,6.25,6.25,0,0,0-4.1-1.49c-4.19,0-7.31,3-7.31,8.44s3.16,8.44,7.31,8.44A6.22,6.22,0,0,0,77,17a.61.61,0,0,1,1,.46v.16c0,3.26-2.47,4.19-4.56,4.19a6.79,6.79,0,0,1-4.66-1.55.61.61,0,0,0-.93.14l-1.27,2.05a.62.62,0,0,0,.14.81,10.1,10.1,0,0,0,6.72,2.12c4.08,0,9-1.54,9-7.86V2.7A.61.61,0,0,0,81.82,2.09ZM78,12.59a.63.63,0,0,1-.14.39,4.9,4.9,0,0,1-3.6,1.7c-2.47,0-4.19-1.72-4.19-4.56s1.72-4.56,4.19-4.56a4.79,4.79,0,0,1,3.63,1.73.59.59,0,0,1,.11.35Zm15.59,6.48a8.41,8.41,0,0,0,8.78-8.72,8.77,8.77,0,0,0-17.54,0A8.4,8.4,0,0,0,93.63,19.07Zm0-13.52c2.71,0,4.26,2.23,4.26,4.8s-1.54,4.84-4.26,4.84S89.41,13,89.41,10.36,90.92,5.55,93.63,5.55Zm25.49-3.47h-2.8a.88.88,0,0,0-.82.57l-3.29,8.78a.88.88,0,0,1-1.64,0l-3.29-8.78a.88.88,0,0,0-.82-.57H103.7a.88.88,0,0,0-.81,1.2l6,14.82a.88.88,0,0,0,.81.55h3.52a.88.88,0,0,0,.81-.55l6-14.82A.88.88,0,0,0,119.12,2.09ZM61.59,21.23a2,2,0,1,0,2,2A2,2,0,0,0,61.59,21.23ZM30.18.44H26.66a.88.88,0,0,0-.88.88v23a.88.88,0,0,0,.88.88h3.52a.88.88,0,0,0,.88-.88v-23A.88.88,0,0,0,30.18.44Zm25.47,0H52.13a.88.88,0,0,0-.88.88V13.74a.88.88,0,0,1-1.59.51L40.05.81a.88.88,0,0,0-.71-.37H35.25a.88.88,0,0,0-.88.88v23a.88.88,0,0,0,.88.88h3.52a.88.88,0,0,0,.88-.88v-13a.88.88,0,0,1,1.59-.51l9.95,14a.88.88,0,0,0,.71.37h3.76a.88.88,0,0,0,.88-.88v-23A.88.88,0,0,0,55.65.44ZM118.59,21.6H87.28a.88.88,0,0,0-.88.88v1.75a.88.88,0,0,0,.88.88h31.31a.88.88,0,0,0,.88-.88V22.48A.88.88,0,0,0,118.59,21.6Z" transform="translate(0 0)"></path></svg>
		</div>
	</div>
<!--**********************************************-->
<!--The following section is for the Incident List-->	
	<div class="vertical-menu" id="vmenu">
		<div class="blockTop" style="width: 100%; overflow: hidden;">
			<div style="width:50%; float: left; text-align: center;"> 
				<button type="button" id="incidentButton" onclick="activateIncidentTable()" class="block">Incidents</button> 
			</div>
			<div style="width:50%; float: right; text-align: center"> 
				<button type="button" id="cameraButton" onclick="activateCameraTable()" class="block">Cameras</button>
			</div>
		</div>
		<div class="incidentTable" id="txtHint"></div>
	</div>
<!--*********************Main***********************-->
<div class="main" id="main">
	<!--TThe following section is for the maps API-->
	<div id="map" class="map" id="map"></div>	
	<!--********************************************-->
	<div class="intel" id="intel">
	<!--The following section is for the maps active camera-->
		<div class="cam" id="thumbnail" >
			<input id="liveFeed" type="image" onerror="imgError(this)" src="http://87.57.111.162:81/mjpg/video.mjpg" onclick="toggleFocus()">
		</div>
<!--*****************************************************************************-->
		<!--The following section is for the Info box-->
		<div class="infobox" id="infobox_element" style="height: 100%; width: 58%;">
		<div class="infobox-header">Camera Information</div>
		<div style="height=100%; float=left;">				
<table class="cbody" style="height=100%; width:50%;">
    <tbody ><tr>
    <th>Camera ID:</th>
    <td>04</td>
    </tr>   
    
    <tr>
    <th>Road:</th>
    <td>I-69 MM</td>
    </tr> 
    
    <tr>
    <th>Latitude:</th>
    <td>40.0379</td>
    </tr> 
    
    <tr>
    <th>Longitude:</th>
    <td>-85.722</td>
    </tr> 
    
    <tr>
    <th>Flow:</th>
    <td> 10 Veh/Hour</td>
    </tr> 
    
    <tr>
    <th>Density:</th>
    <td> 20 Veh/mile</td>
    </tr> 
    
    <tr>
    <th>Incident ID:</th>
    <td>549315</td>
    </tr>
    
    <tr>
    <th>Start:</th>
    <td>02/15/10 15:53:47</td>
    </tr>
    
    <tr>
    <th>End:</th>
    <td>02/15/10 16:53:47</td>
    </tr>
    
    <tr>
    <th>Road Condition:</th>
    <td>OC | Wind:NNE 5mph</td>
    </tr>    
</tbody></table></div>
		</div>
<!--********************************************-->
<div class="footer"> </div>

<script src="leaflet.js"></script>
<script src="clock.js"></script>
<script src="map.js"></script>
<script src="resize.js"></script>
<script src="imgError.js"></script>
<script src="database.js"></script>
<script>
<?php include 'cameraIcons.php';?>
</script>
</body>
</html>
