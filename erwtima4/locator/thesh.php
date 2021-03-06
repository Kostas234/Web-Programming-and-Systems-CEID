<?php
$idIn=NULL;
session_start();

?>

<!DOCTYPE html >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>Εντοπισμός Παραγγελίες</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
 </style>
  </head>
  <body style="margin:0px; padding:0px;" onload="initMap()">
    <div>
        <label for="idInput">ID παραγγελίας:</label>
		<a href="../index.php" class="btn btn-large btn-success" style = "margin-left: 41%"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Πίσω στην αρχική</a>
		<form method="POST" action=" ">
		<input type="text" name="idInput" placeholder="ID"  valsize="15"/> 
	    <select style="display:none" id="radiusSelect" label="Radius" value="50">
        <option style="display:none" value="50" selected>15 χλμ</option>
        </select>
		<input type="submit"  />
		</form>
		<?php 
		
		
		if (empty($_POST["idInput"])){
		}		
		else{
		$idIn=$_POST["idInput"];
		}
		$DB_host = "localhost";
		$DB_user = "root";
		$DB_pass = "";
		$DB_name = "project2017";
	 
		$MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
		mysqli_query($MySQLiconn, 'SET CHARACTER SET utf8');
	    mysqli_query($MySQLiconn, 'SET COLLATION_CONNECTION=utf8_general_ci');
		$result = mysqli_query($MySQLiconn, "SELECT location, locations FROM orders WHERE track_id='$idIn'");
		$row = mysqli_fetch_assoc($result);
		$loc= $row['location'];
		$locs= $row['locations'];
		echo "Διαδρομή:&nbsp".$locs;
		echo "</br>";
		echo "Τρέχουσα τοποθεσία:&nbsp".$loc;
		?>	</br>
		<input type="button" id="searchButton" value="Προβολή στον χάρτη τρέχουσας τοποθεσίας">
	</div>
    <div><select id="locationSelect" style="width: 10%; visibility: hidden"></select></div>
    <div id="map" style="width: 100%; height: 90%"></div>
   
   <script>markers
      var map;
      var markers = [];
      var infoWindow;
      var locationSelect;
	  var address = "<?php echo $loc; ?>";
	    function initMap() {
          var patra = {lat: 38.249802, lng: 21.739080};
          map = new google.maps.Map(document.getElementById('map'), {
            center: patra,
            zoom: 11,
            mapTypeId: 'roadmap',
            mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
          });
          infoWindow = new google.maps.InfoWindow();

          searchButton = document.getElementById("searchButton").onclick = searchLocations;

          locationSelect = document.getElementById("locationSelect");
          locationSelect.onchange = function() {
            var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
            if (markerNum != "none"){
              google.maps.event.trigger(markers[markerNum], 'click');
            }
          };
        }

       function searchLocations() {
		 var geocoder = new google.maps.Geocoder();
         geocoder.geocode({address: address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
            searchLocationsNear(results[0].geometry.location);
           } else {
             alert(address + ' δεν βρέθηκε');
           }
         });
       }
	   
       function clearLocations() {
         infoWindow.close();
         for (var i = 0; i < markers.length; i++) {
           markers[i].setMap(null);
         }
         markers.length = 0;

         locationSelect.innerHTML = "";
         var option = document.createElement("option");
         option.value = "none";
         option.innerHTML = "Όλα τα αποτελέσματα:";
         locationSelect.appendChild(option);
       }

       function searchLocationsNear(center) {
         clearLocations();

         var radius = document.getElementById('radiusSelect').value;
         var searchUrl = 'theshlocator.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
         downloadUrl(searchUrl, function(data) {
           var xml = parseXml(data);
           var markerNodes = xml.documentElement.getElementsByTagName("marker");
           var bounds = new google.maps.LatLngBounds();
           for (var i = 0; i < markerNodes.length; i++) {
             var id = markerNodes[i].getAttribute("id");
             var name = markerNodes[i].getAttribute("name");
             var address = markerNodes[i].getAttribute("address");
             var distance = parseFloat(markerNodes[i].getAttribute("distance"));
             var latlng = new google.maps.LatLng(
                  parseFloat(markerNodes[i].getAttribute("lat")),
                  parseFloat(markerNodes[i].getAttribute("lng")));

             createOption(name, distance, i);
             createMarker(latlng, name, address);
             bounds.extend(latlng);
           }
           map.fitBounds(bounds);
           locationSelect.style.visibility = "visible";
           locationSelect.onchange = function() {
             var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
             google.maps.event.trigger(markers[markerNum], 'click');
           };
         });
       }

       function createMarker(latlng, name, address) {
          var html = "<b>" + name + "</b> <br/>" + address;
          var marker = new google.maps.Marker({
            map: map,
            position: latlng
          });
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
          markers.push(marker);
        }

       function createOption(name,distance, num) {
          var option = document.createElement("option");
          option.value = num;
          option.innerHTML = name;
          locationSelect.appendChild(option);
       }

       function downloadUrl(url, callback) {
          var request = window.ActiveXObject ?
              new ActiveXObject('Microsoft.XMLHTTP') :
              new XMLHttpRequest;

          request.onreadystatechange = function() {
            if (request.readyState == 4) {
              request.onreadystatechange = doNothing;
              callback(request.responseText, request.status);
            }
          };

          request.open('GET', url, true);
          request.send(null);
       }

       function parseXml(str) {
          if (window.ActiveXObject) {
            var doc = new ActiveXObject('Microsoft.XMLDOM');
            doc.loadXML(str);
            return doc;
          } else if (window.DOMParser) {
            return (new DOMParser).parseFromString(str, 'text/xml');
          }
       }

       function doNothing() {}
	</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBovcLbQjz-cPLKn455XIqn9tjdfX46qLA&callback=initMap">
    </script>
  </body>
</html>