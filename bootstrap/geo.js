function GEOprocess(position) {
  document.getElementById('geo').innerHTML = 'Latitude: ' + position.coords.latitude + ' Longitude: ' + position.coords.longitude;

	GEOajax("geo.php?accuracy=" + position.coords.accuracy + "&latlng=" + position.coords.latitude + "," + position.coords.longitude +"&altitude="+position.coords.altitude+"&altitude_accuracy="+position.coords.altitudeAccuracy+"&heading="+position.coords.heading+"&speed="+position.coords.speed+"");
}

//when users hit "don't share"
function GEOdeclined(error) {
    document.getElementById('geo').innerHTML = 'Error: ' + error.message;
}

if (navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(GEOprocess, GEOdeclined);
} else {
    document.getElementById('geo').innerHTML = 'Your browser sucks. Upgrade it.';
    }

//checks if the browser supports XML HTTPRequests 
if (window.XMLHttpRequest) {
    xmlHttp = new XMLHttpRequest();
} else if(window.ActiveXObject){
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}

function GEOajax(url) {
    xmlHttp.open("GET", url, true);
    xmlHttp.onreadystatechange = updatePage;
    xmlHttp.send(null);
}

function updatePage() {
    if (xmlHttp.readyState == 4) {
        var response = xmlHttp.responseText;
        document.getElementById("geo").innerHTML = '' + response;
    }
}
