	function initialize() {
		// 39.901737,-83.07686 - map settings
		var myPlace = new google.maps.LatLng(40.1028860,-82.8245560);
		// 39.899794,-83.077887  - the address
		var myCenter = new google.maps.LatLng(40.1028860,-82.8245560);
		var mapProp = {
			center:myPlace,
			zoom:14,
			styles: [{"featureType": "landscape","stylers": [{"saturation": -100},{"lightness": 65},{"visibility": "on"}]},{"featureType": "poi","stylers": [{"saturation": -100}, {"lightness": 51 }, {"visibility": "simplified"} ] }, {"featureType": "road.highway", "stylers": [{"saturation": -100 }, {"visibility": "simplified"} ] }, {"featureType": "road.arterial", "stylers": [{"saturation": -100 }, {"lightness": 30 }, {"visibility": "on"} ] }, {"featureType": "road.local", "stylers": [{"saturation": -100 }, {"lightness": 40 }, {"visibility": "on"} ] }, {"featureType": "transit", "stylers": [{"saturation": -100 }, {"visibility": "simplified"} ] }, {"featureType": "administrative.province", "stylers": [{"visibility": "off"} ] }, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25 }, {"saturation": -100 } ] }, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25 }, {"saturation": -97 } ] } ],
			mapTypeId:google.maps.MapTypeId.ROADMAP,
		    scrollwheel: false,
		    navigationControl: false,
		    mapTypeControl: false,
		    scaleControl: false,
		    draggable: false
		};
		var map=new google.maps.Map(document.getElementById("map_canvas"),mapProp);
		var marker=new google.maps.Marker({
			position:myCenter,
		});
		marker.setMap(map);
		var iw = new google.maps.InfoWindow({
			content: "<div id='gmaps-modal'><span class='gmaps-modal__info'>Simmons Design Co.</span><span class='gmaps-modal__info'>5839 Middleham Lane</span><span class='gmaps-modal__info'>New Albany, OH 43054</span></div>",
			maxWidth: 280,
		});
		//	iw.open(map, marker);
		google.maps.event.addListener(marker, "click", function (e) { iw.open(map, marker); });
		google.maps.event.addDomListener(window, "resize", function() {
		 var center = map.getCenter();
		 google.maps.event.trigger(map, "resize");
		 map.setCenter(center); 
		});
	} // function
	function ref() { 
		google.maps.event.trigger(map, 'resize');
	}

google.maps.event.addDomListener(window, "load", initialize);
//		initialize();
