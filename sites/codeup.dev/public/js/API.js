"use strict";

var locations = [{
	address: '112 E Pecan St, San Antonio, TX, 78205', 
	}, {
	address: '627 Sims, San Antonio, TX, 78225'
	}];

// Init geocoder object
var geocoder = new google.maps.Geocoder();

// Geocode our address
geocoder.geocode( { address: location.address}, function(results, status) {
  // Check for a successful result
  if (status == google.maps.GeocoderStatus.OK) {
    // Set our map options
    var mapOptions = {
      // Set the zoom level
      zoom: 18,
      // This sets the center of the map at our location
      center: results[0].geometry.location
    }
    // Render the map
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
  } else {
    // Show an error message with the status if our request fails
    alert("Geocoding was not successful - STATUS: " + status);
  }
});