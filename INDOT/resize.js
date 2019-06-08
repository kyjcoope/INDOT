var big = 0;
function toggleFocus(){
	var feed = document.getElementById("thumbnail");
	var info = document.getElementById("infobox_element");
	var map = document.getElementById("map");
	var main = document.getElementById("main");
	var intel = document.getElementById("intel");
	var iList = document.getElementById("txtHint");
	var vmenu = document.getElementById("vmenu");
	console.log("toggle: " + big);
				
	if(!big){
		feed.style.position = "absolute";
		feed.style.width="100%";
			
		map.style.display = "none";
				
		main.appendChild(feed);
		vmenu.appendChild(info);
		
		iList.style.height = "60%";
		info.style.height = "40%";
		info.style.width = "100%";
			
		big = 1;
				
	}else{
		feed.style.position = "relative";
		feed.style.width="40%";
					
		map.style.display = "inline";
					
		intel.appendChild(feed);
		intel.appendChild(info);
					
		iList.style.height = "100%";
		info.style.height = "100%";
		info.style.width = "58%";				
					
		big = 0;
	}
}