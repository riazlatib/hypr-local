gas();

// Load Google Map Elements
google.maps.event.addDomListener( window, 'load', initMap );

var map;
function initMap() {
  // - Initialize Map
  map = new google.maps.Map(document.getElementById('map'), {
    //center: {lat: -34.397, lng: 150.644},
    center: {lat: 28.538335, lng: -81.379236},
    zoom: 13
  });

  // - Add Traffic Layer
  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);

  // - Display the twitter feed
  var twitter = document.getElementById('twitter');
  map.controls[google.maps.ControlPosition.RIGHT_TOP].push(twitter);

  // - Display the twitter feed
  var gas = document.getElementById('gas');
  map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(gas);
}

// Load the gas prices
function gas() {
	var result = jQuery.ajax({
		url : "/wp-content/plugins/hypr-local/js/gas.json",
		type: "POST",
		success: function(data) {
      var gas_stations = '<ul>'
      var num_gas_stations_to_display = 16;
      for (var i = 0; i < num_gas_stations_to_display; i++) {
        if ((data.stations[i].reg_price != 'N/A') && (data.stations[i].station != 'Unbranded')) {
          gas_stations = gas_stations + '<li>';
          gas_stations = gas_stations + '<span class="gas_title">' + data.stations[i].station + '</span>';
          gas_stations = gas_stations + '<br />';
          gas_stations = gas_stations + data.stations[i].address;
          gas_stations = gas_stations + '<br />';
          gas_stations = gas_stations + '$ ' + data.stations[i].reg_price;
          gas_stations = gas_stations + '</li>';
        }
      }
      gas_stations = gas_stations + '</ul>';
      jQuery('#stations').html(gas_stations);
		},
		error: function (errorThrown) {
		  //error - response
		  console.log('There has been an error: ' + errorThrown);
		}
	});
}
