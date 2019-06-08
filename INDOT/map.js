var mymap = L.map('map').setView([39.8, -86.157877], 11);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	maxZoom: 18,
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox.streets'
}).addTo(mymap);
			
var greenIcon = L.icon({
	iconUrl: 'orangeIcon.png',
	iconSize:     [25, 25], // size of the icon	
});

var activeMarker = L.icon({
	iconUrl: 'selector.png',
	iconSize: [30,30],
});		
var tempMarker = {};
function onClick(e){
	if(tempMarker!=undefined){
		mymap.removeLayer(tempMarker);
	}
	tempMarker = L.marker(e.latlng, {icon: activeMarker}).addTo(mymap);
	getActiveCamLL(e.latlng.lat,e.latlng.lng);
}