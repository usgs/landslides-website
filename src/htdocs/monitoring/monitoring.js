loadMap = function() {
        
        if (GBrowserIsCompatible()) {                
		map = new GMap2(document.getElementById('map'));
                        
                map.setCenter(new GLatLng(42, -108), 1);
                map.addMapType(G_PHYSICAL_MAP);
                map.setMapType(G_PHYSICAL_MAP);
                map.setZoom(4);
        
                // ====== Restricting the range of Zoom Levels =====
                // Get the list of map types      
                var mt = map.getMapTypes();
                // Overwrite the getMinimumResolution() and getMaximumResolution() methods
                for (var i=0; i<mt.length; i++) {
                        mt[i].getMinimumResolution = function() {return 3;}
                        mt[i].getMaximumResolution = function() {return 9;}
                }

                      // Add a move listener to restrict the bounds range
                /*
                GEvent.addListener(map, "move", function() {
                        checkBounds();
                });

                */

                // The allowed region which the whole map must be within
                var allowedBounds = new GLatLngBounds(new GLatLng(35,-100), new GLatLng(40,-90));
      

		map.addControl(new GScaleControl());
                map.addControl(new GLargeMapControl3D());
        }
}


loadStationMap = function(stationName) {
        
        if (GBrowserIsCompatible()) {                
		map = new GMap2(document.getElementById('map'));
		var coords = null;

		for( var i in stationCoords ) {
			if( stationCoords[i].name == stationName ) {
				coords = new GLatLng( stationCoords[i].lat, stationCoords[i].lng );
				break;
			}
		}
	
		var zoom = 9;
		
		// We couldn't find coordinates in the list       
		if( coords == null ) {
			coords = new GLatLng(40, -100);
			zoom = 2; 
		}
                
		map.setCenter( coords, 1);
                map.addMapType(G_PHYSICAL_MAP);
                map.setMapType(G_PHYSICAL_MAP);
                map.setZoom(zoom);

                // ====== Restricting the range of Zoom Levels =====
                // Get the list of map types      
                var mt = map.getMapTypes();
                // Overwrite the getMinimumResolution() and getMaximumResolution() methods
                for (var i=0; i<mt.length; i++) {
                        mt[i].getMinimumResolution = function() {return 3;}
                        mt[i].getMaximumResolution = function() {return 9;}
                }

                // The allowed region which the whole map must be within
                var allowedBounds = new GLatLngBounds(new GLatLng(35,-100), new GLatLng(40,-90));
      
                map.addControl(new GLargeMapControl3D());
        }
}

addStationMarkers = function () {
	var markers = [];
	// requires you to have included the coordinates.js file before this
	for( var i in stationCoords ) {
		var coords = new GLatLng( stationCoords[i].lat, stationCoords[i].lng );
		var options = { 'title': stationCoords[i].name };
		markers[i] = new GMarker( coords, options ) ;
		map.addOverlay( markers[i] );
		GEvent.addListener(markers[i], "click", 
		( 
			function(href) { 
				return function(){
					location.href = href;
				};
			} 
		)
		(stationCoords[i].href)
		);
	}
}  
 
// If the map position is out of range, move it back
checkBounds = function() {
	// Perform the check and return if OK
	if (allowedBounds.contains(map.getCenter())) {
		return;
	}
	// It`s not OK, so find the nearest allowed point and move there
	var C = map.getCenter();
	var X = C.lng();
	var Y = C.lat();
	var AmaxX = allowedBounds.getNorthEast().lng();
	var AmaxY = allowedBounds.getNorthEast().lat();
	var AminX = allowedBounds.getSouthWest().lng();
	var AminY = allowedBounds.getSouthWest().lat();
	if (X < AminX) {X = AminX;}
	if (X > AmaxX) {X = AmaxX;}
	if (Y < AminY) {Y = AminY;}
	if (Y > AmaxY) {Y = AmaxY;}
	map.setCenter(new GLatLng(Y,X));
}
