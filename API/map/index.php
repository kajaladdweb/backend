<!DOCTYPE html>
<html>
<head>
	<title>Access Google Maps API in PHP</title>
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="googlemap.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h1>Access Google Maps API in PHP</h1></center>



	
		<div id="map"></div>
	</div>
</body>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA8xu0L8eHZcrRqDNAH2H-1Y51wHPIjW8&callback=loadMap"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
    <script src="Scripts/jquery-3.1.1.min.js"></script>
    <script src="Main.js"></script>

</html>