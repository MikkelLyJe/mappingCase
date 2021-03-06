<!DOCTYPE html>
<html>
<head>
<title>Mapbox Tutorial</title>
<meta name="generator" content="Bluefish 2.2.9" >
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<!-- mapbox cdn -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.40.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.40.0/mapbox-gl.css' rel='stylesheet' />

<!-- external css is better, but ... -->
<style>

#map {
		width: 400px;
		height: 400px;
}

</style>


</head>
<body>

<h1>Aarhus - Tangkrogen</h1>

<!-- here's the map -->
<div id='map'></div>

<!-- mapbox script -->
<script>
/**
 * add the Mapbox style to the var below:
 **/
var myStyle = "ADD-THE-LINK-TO-THE-MAP-HERE";

/**
 * From the Mapbox tutorial
 * The map will center, zoom etc. as in your style on Mapbox
 **/
mapboxgl.accessToken = 'PASTE-YOUR-TOKEN-HERE';
var map = new mapboxgl.Map({
container: 'map',
style: myStyle
});
</script>

</body>
</html>

