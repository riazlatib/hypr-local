
<?php
?>
<div id="map"></div>

<!--/* - JavaScript Section - */ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw6mTI47cPQ9j9hYcQFnhagDKYOayRniw&callback=initMap" async defer></script>
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 8
    });
  }
</script>
