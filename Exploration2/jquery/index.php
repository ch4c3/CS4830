<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Exploration 2</title>
	<!-- for font used -->
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<!-- Jquery UI imports-->
	<link href="jquery-ui.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text" rel="stylesheet">

	<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.min.js"></script>

	<style>
body{
	background-image: url('black.png');
}
#resizable { width: 150px;
	height: 150px;
	padding: 0.5em;
	background-color: transparent;
 }
 #resizable h2 { text-align: center;
	 margin: 0; }
	 .header{
		 text-align: center;
		 margin-left: 0 auto;

	 }
	 h1, h2{
		 font-family: 'Libre Barcode 39 Text', cursive;
		color: white;
	 }
	</style>
	<script>
 $( function() {
	 $( "#resizable" ).resizable();
 } );

 </script>
</head>
<body>
	<div class="wrapper">
	<div class="header">
	<h1>Candace's Jquery UI Tutorial</h1>
</div>
<div class="interactions">
	<h2>Interactions</h2>
	<div id="resizable" class="ui-widget-content">
<h3 class="ui-widget-header">Resizable boxes</h3>
	</div>
	<div>
</div>
</body>
</html>
