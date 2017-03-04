
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

#gas {
    font-family: Arial, sans-serif;
    background: #fff;
    padding: 10px;
    margin: 10px;
    width: 159px;
    height: 327px;
    /*border: 3px solid #000;*/
}
ul {
    list-style-type: none;
}

.gas_title {
  font-size: 12px;
  font-weight: bold;
}

#gas_header {
  font-size: 12px;
  font-weight: bold;
  color: red;
}

#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}
#floating-panel {
  background-color: #fff;
  border: 1px solid #999;
  left: 25%;
  padding: 5px;
  position: absolute;
  top: 10px;
  z-index: 5;
}
</style>

<!--/* - HTML Section - */ href="https://twitter.com/search?q=%23orlando%20%23traffic" -->
<div id="floating-panel">
  <button onclick="toggleHeatmap()">Toggle Heatmap</button>
  <button onclick="changeGradient()">Change gradient</button>
  <button onclick="changeRadius()">Change radius</button>
  <button onclick="changeOpacity()">Change opacity</button>
</div>

<div id="map"></div>
<div id="twitter">
  <a class="twitter-timeline"
  target="_blank"
  href="https://twitter.com/search?q=%23oscars"
  data-widget-id="838107282277793793">Tweets about #orlando #traffic</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div id="gas">
  <span id="gas_header">Local Gas</span>
  <div id="stations"></div>
</div>

<!--/* - JavaScript Section - */ -->
<script src="/wp-content/plugins/hypr-local/js/home.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw6mTI47cPQ9j9hYcQFnhagDKYOayRniw&callback=initMap&libraries=places" async defer></script>
