function initializeMap() {
	var mapCanvas = document.querySelector("#mapCanvas");

	var mapOptions = {
		"mapTypeId":  google.maps.MapTypeId.SATELLITE,
		"zoom":  15
	};

	var map = new google.maps.Map(mapCanvas, mapOptions);

	var defaultLatitude = 41.0086291;
	var defaultLongitude = -89.6534029;

	if(navigator && navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(currentPosition) {
			// The current location was successfully identified.
			addMapMarker(map, currentPosition.coords.latitude, currentPosition.coords.longitude, true);
		}, function(error) {
			// The navigator failed to return the current position.
			addMapMarker(map, defaultLatitude, defaultLongitude, true);
		});
	}
	else {
		// The browser does not support geolocation.
		addMapMarker(map, defaultLatitude, defaultLongitude, true);
	}

	google.maps.event.addListener(map, "click", function(position) {
		var latitude = position.latLng.lat();
		var longitude = position.latLng.lng();

		addMapMarker(map, latitude, longitude, false);
	});
}

function addMapMarker(map, latitude, longitude, panToPosition) {
	var position = new google.maps.LatLng(latitude, longitude);

	var markerOptions = {
		"map":  map,
		"position":  position
	};

	var marker = new google.maps.Marker(markerOptions);

	google.maps.event.addListener(marker, "click", function() {
		var markerInformationWindow = new google.maps.InfoWindow();

		var markerInformation = "[" + latitude + ", " + longitude + "]";
		markerInformationWindow.setContent(markerInformation);

		markerInformationWindow.open(map, marker);
	});

	if(panToPosition) {
		map.panTo(position);
	}
}
