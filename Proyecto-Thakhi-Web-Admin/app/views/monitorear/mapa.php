<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
html { height: 100% }
body { height: 100%; margin: 0; padding: 0 }
#map_canvas { height: 100% }
</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAeB28AE1Xw3Ert5DOBYsO_EO_oQz1PFSw&sensor=true"></script>
<script type="text/javascript">
function initialize()
{
var myOptions = {
center: new google.maps.LatLng(40.39, -3.41),
zoom: 8,
mapTypeId: google.maps.MapTypeId.ROADMAP };
var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}
</script>
</head>
<body onload="initialize()">
<div id="map_canvas" style="width:100%; height:100%"></div>
</body>
</html>