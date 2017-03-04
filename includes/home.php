
<?php
?>
<!--/* - CSS Section - */ -->
<style type="text/css">
#map {
  height: 765px;
  width: 100%;
}

#twitter {
    font-family: Arial, sans-serif;
    background: #fff;
    padding: 10px;
    margin: 10px;
    border: 3px solid #000;
  }
</style>

<!--/* - HTML Section - */ -->
<div id="map"></div>
<div id="twitter">Hello from the other side</div>

<!--/* - JavaScript Section - */ -->
<script>
google.maps.event.addDomListener( window, 'load', initMap );

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    //center: {lat: -34.397, lng: 150.644},
    center: {lat: 28.662075, lng: -81.388521},
    zoom: 13
  });

  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);


  var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          parking: {
            name: 'Parking',
            icon: iconBase + 'parking_lot_maps.png'
          },
          library: {
            name: 'Library',
            icon: iconBase + 'library_maps.png'
          },
          info: {
            name: 'Info',
            icon: iconBase + 'info-i_maps.png'
          }
        };

  var legend = document.getElementById('twitter');
  for (var key in icons) {
    // var type = icons[key];
    //var name = type.name;
    // var icon = type.icon;
    var div = document.createElement('div');
    //div.innerHTML = '<img src="' + icon + '"> ' + name;
    div.innerHTML = 'yo!';
    legend.appendChild(div);
  }
  map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);

}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw6mTI47cPQ9j9hYcQFnhagDKYOayRniw&callback=initMap" async defer></script>
