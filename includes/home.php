
<?php
?>
<!--/* - CSS Section - */ -->
<link rel="stylesheet" type="text/css" href="/wp-content/plugins/hypr-local/css/style.css">

<!--/* - HTML Section - */ href="https://twitter.com/search?q=%23orlando%20%23traffic" -->
<div id="map"></div>
<div id="twitter">
  <a class="twitter-timeline"
  target="_blank"
  href="https://twitter.com/search?q=%23orlando%20%23traffic"
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
