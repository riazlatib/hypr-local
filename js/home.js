gas();

// Load Google Map Elements
google.maps.event.addDomListener( window, 'load', initMap );

var map, heatmap;
function initMap() {
  // - Initialize Map
  map = new google.maps.Map(document.getElementById('map'), {
    //center: {lat: -34.397, lng: 150.644},
    center: {lat: 28.538335, lng: -81.379236},
    zoom: 13
  });

  heatmap = new google.maps.visualization.HeatmapLayer({
    data: getPoints(),
    map: map
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

function toggleHeatmap() {
  heatmap.setMap(heatmap.getMap() ? null : map);
}

function changeGradient() {
  var gradient = [
    'rgba(0, 255, 255, 0)',
    'rgba(0, 255, 255, 1)',
    'rgba(0, 191, 255, 1)',
    'rgba(0, 127, 255, 1)',
    'rgba(0, 63, 255, 1)',
    'rgba(0, 0, 255, 1)',
    'rgba(0, 0, 223, 1)',
    'rgba(0, 0, 191, 1)',
    'rgba(0, 0, 159, 1)',
    'rgba(0, 0, 127, 1)',
    'rgba(63, 0, 91, 1)',
    'rgba(127, 0, 63, 1)',
    'rgba(191, 0, 31, 1)',
    'rgba(255, 0, 0, 1)'
  ]
  heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
}

function changeRadius() {
  heatmap.set('radius', heatmap.get('radius') ? null : 20);
}

function changeOpacity() {
  heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
}

function getPoints() {
  return [
    new google.maps.LatLng(37.782551, -122.445368)
  ]
}

function eqfeed_callback(results) {
  var heatmapData = [];
  for (var i = 0; i < results.features.length; i++) {
    var coords = results.features[i].geometry.coordinates;
    var coords = [28.538335, -81.379236];
    var latLng = new google.maps.LatLng(coords[1], coords[0]);
    heatmapData.push(latLng);
  }
  var heatmap = new google.maps.visualization.HeatmapLayer({
    data: heatmapData,
    dissipating: false,
    map: map
  });
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
