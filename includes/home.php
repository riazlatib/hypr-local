
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
    width: 300px;
    height: 300px;
    /*border: 3px solid #000;*/
  }
.timeline-Footer.u-cf {
  display: none !important;
}
</style>

<!--/* - HTML Section - */ -->
<div id="map"></div>
<div id="twitter">
  <a class="twitter-timeline"
  href="https://twitter.com/search?q=%23orlando%20%23traffic"
  data-widget-id="838107282277793793">Tweets about #orlando #traffic</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<!--/* - JavaScript Section - */ -->
<script>
jQuery();
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
  var legend = document.getElementById('twitter');
  map.controls[google.maps.ControlPosition.RIGHT_TOP].push(legend);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw6mTI47cPQ9j9hYcQFnhagDKYOayRniw&callback=initMap" async defer></script>
