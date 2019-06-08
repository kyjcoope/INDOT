function startTime() {
  	var today = new Date();
	var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
 	 var h = today.getHours();
  	var m = today.getMinutes();
  	var s = today.getSeconds();
  	m = checkTime(m);
  	s = checkTime(s);
  	document.getElementById('txt').innerHTML =
  	months[today.getMonth()] + " " + today.getDate() + ", " + today.getFullYear() + " " + h + ":" + m + ":" + s;
  	var t = setTimeout(startTime, 500);
}
	
function checkTime(i) {
  	if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  		return i;
}