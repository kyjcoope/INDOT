//globals
var currentTable = 0; //keeps track of current table

function updateLiveFeed(url) { //sets url for live camera; takes: url, returns: nothing
    document.getElementById("liveFeed").src = url;
}

//functions
//dynamicSort
function dynamicSort(property) { //sort javascript object by key;  takes: key, returns: nothing
    var sortOrder = 1;

    if(property[0] === "-") {
        sortOrder = -1;
        property = property.substr(1);
    }

    return function (a,b) {
        if(sortOrder == -1){
            return b[property].localeCompare(a[property]);
        }else{
            return a[property].localeCompare(b[property]);
        }        
    }
}
//makeTable
function makeTable(obj){ //turn javascript object into html table;  takes: javascript Object, returns: string
	var table = "<table class='fixed_header' id='vmenu_table'>";
	var header = Object.keys(obj[0]);
	var tempSortType = 0;
	var row = new Array(Object.keys(obj[0]).length);
	table += "<thead>";
	table += "<tr>";
	for(i=0;i< Object.keys(obj[0]).length; i++){
		tempSortType = "'"+header[i]+"'";
		table += "<th><form><input type='button' value='"+header[i]+"' onclick='sortTable(\""+header[i]+"\")' style='width: 100%'></form></th>";
	}
	table += "</tr></thead><tbody>";
	
	for(i=0;i<obj.length;i++){
		table += "<tr>";
		row = Object.values(obj[i]);
		for(j=0;j<Object.keys(obj[0]).length; j++){
			table += "<td>";
			table += row[j];
			table += "</td>";
		}
		table += "</tr>";
	}
	
	table += "</tbody></table>";
	
	return table;
}
//setCurrentTable
function setCurrentTable(curTable){ //sets current active table;  takes: json, returns: nothing
	window.currentTable = JSON.parse(curTable);
	window.currentTable.sort(dynamicSort(localStorage.getItem('sortType')));
	document.getElementById("txtHint").innerHTML = makeTable(window.currentTable);
}
//startUp
function startUp() {//startup settings; takes: nothing, returns: nothing
	getTable("incidentTable.php");
	//obj = getTable("cameraTable.php");
	//obj.sort(dynamicSort("-url"));
	localStorage.setItem('sortType', 'id');
	localStorage.setItem('activeList', '2');
	document.getElementById("incidentButton").style.backgroundColor="#0c2440";	
}
//activateCameraTable
function activateCameraTable(){//activate camera table; takes: nothing, returns: nothing
	localStorage.setItem('activeList', '1');
	document.getElementById("incidentButton").style.backgroundColor="#646464";
	document.getElementById("cameraButton").style.backgroundColor="#0c2440";
	getTable("cameraTable.php");
}
//activateIncidentTable
function activateIncidentTable(){//activate incident table; takes: nothing, returns: nothing
	localStorage.setItem('activeList', '2');
	document.getElementById("cameraButton").style.backgroundColor="#646464";
	document.getElementById("incidentButton").style.backgroundColor="#0c2440";	
	getTable("incidentTable.php");
}
//getActiveCamLL
function getActiveCamLL(lat,lon) {//get active camera settings; takes: lat, lon, returns: nothing (response is given to another function)
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
	xmlhttp.open("GET","activeCam.php?lat="+lat+"&lon="+lon,true);
	xmlhttp.send();
}
//getActiveCamID
function getActiveCamID(id) {//get active camera settings; takes: lat, lon, returns: nothing (response is given to another function)
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
	xmlhttp.open("GET","activeCam.php?id="+id,true);
	xmlhttp.send();
}
//getTable
function getTable(tableName) {//get active camera settings; takes: table name, returns: nothing (response is given to another function)
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
			return setCurrentTable(this.responseText);
		}
	};
	xmlhttp.open("GET",tableName,true);
	xmlhttp.send();
}
//onTimerElapsed
function onTimerElapsed(){//get active table for timer; takes: nothing, returns: nothing
	if(localStorage.getItem('activeList')=='1'){
		activateCameraTable();
	} else{
		activateIncidentTable();
	}
}
//sortTable
function sortTable(name) {//sort javascript Object; takes: javascript Object, returns: nothing
	localStorage.setItem('sortType', name);
	if(localStorage.getItem('activeList')=='1'){
		activateCameraTable();
	}
	else{
		activateIncidentTable();
	}
}