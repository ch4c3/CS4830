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
<!--bootstrap-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<style>
body{
	background-image: url('black.png');
}
#resizable { width: 150px;
	height: 150px;
	padding: 2px;
	background-color: transparent;
 }
 #resizable h2 {
	 text-align: center;
	 margin: 0; }
	 .header{
		 text-align: center;
		 margin-left: 0 auto;

	 }
	  #draggable {
			width: 150px;
			height: 150px;
			padding: 2px;
		}

	 h1, h2{
		 font-family: 'Libre Barcode 39 Text', cursive;
		color: white;
	 }
	 #draggable {
		 width: 100px;
		 height: 100px;
		 padding: 0.5em;
		 float: left;
		 margin: 10px 10px 10px 0; }
  #droppable {
		width: 150px;
		height: 150px;
		padding: 0.5em; float: left;

	}
	#sortable {
		list-style-type: none;
		padding: 0;
		width: 60%;
		margin: 0 auto;
	}
  #sortable li {
		padding: 0.4em;
		padding-left: 1.5em;
		font-size: 1.4em;
		height: 18px; }
  #sortable li span {
		position: absolute;
		margin-left: -1.3em;
	}
	#accordion{
		padding: 20px;
	}
	.toggler { width: 500px;
		height: 200px;
		position: relative;
	}
	 #button {
		 padding: .5em 1em;
		 text-decoration: none;
	 }
	 #effect {
		 width: 240px;
		 height: 170px;
		 padding: 0.4em;
		 position: relative; background: #fff;
	 }
	 #effect h3 {
		 margin: 0;
		 padding: 0.4em;
		 text-align: center;
	 }
	 .toggler{
		 float: left;
	 }
	 .toggler2{
		float: left;
	}
	#widgets{
		float: left;
		padding: 90px;
	}
	</style>
	<script>
 $( function() {
	 $( "#resizable" ).resizable();
 } );
 $( function() {
	 $( "#draggable" ).draggable();
 } );
 $( function() {
     $( "#sortable" ).sortable();
     $( "#sortable" ).disableSelection();
   } );
	 $( function() {
	$( "#accordion" ).accordion();
} );
$( function() {
	 var state = true;
	 $( "#button" ).on( "click", function() {
		 if ( state ) {
			 $( "#effect" ).animate({
				 backgroundColor: "#aa0000",
				 color: "#fff",
				 width: 500
			 }, 1000 );
		 } else {
			 $( "#effect" ).animate({
				 backgroundColor: "#fff",
				 color: "#000",
				 width: 240
			 }, 1000 );
		 }
		 state = !state;
	 });
 } );
 $( function() {
	 // run the currently selected effect
	 function runEffect() {
		 // get effect type from
		 var selectedEffect = $( "#effectTypes" ).val();

		 // Most effect types need no options passed by default
		 var options = {};
		 // some effects have required parameters
		 if ( selectedEffect === "scale" ) {
			 options = { percent: 50 };
		 } else if ( selectedEffect === "size" ) {
			 options = { to: { width: 200, height: 60 } };
		 }

		 // Run the effect
		 $( "#effects" ).hide( selectedEffect, options, 1000, callback );
	 };

	 // Callback function to bring a hidden box back
	 function callback() {
		 setTimeout(function() {
			 $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
		 }, 1000 );
	 };

	 // Set effect from select menu value
	 $( "#buttons" ).on( "click", function() {
		 runEffect();
	 });
 } );
 $( function() {
	 $( "#progressbar" ).progressbar({
		 value: 50
	 });
 } );
 $( function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );

	$( function() {
	 $( "#slider" ).slider();
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
		<div id="draggable" class="ui-widget-content">
  <p>Drag me!</p>
	</div>
	<!--<div id="draggable" class="ui-widget-content">
  <p>Drag me to the box</p>
</div>
<div id="droppable" class="ui-widget-header">
  <p>Drop here!</p>
</div>-->

<ul id="sortable">
<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>1</li>
<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>2</li>
<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>3</li>
<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>4</li>
<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>5</li>
<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>6</li>
<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>7</li>
</ul>
<div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>
</div>

<div class="effects">
	<h2> Effects </h2>
	<div class="toggler">
	  <div id="effect" class="ui-widget-content ui-corner-all">
	    <h3 class="ui-widget-header ui-corner-all">Animate</h3>
	    <p>
	     click me to change colors!
	    </p>
	  </div>
	</div>

	<button id="button" class="ui-state-default ui-corner-all">Toggle</button><br />

	<div class="toggler2" >
  <div id="effects" class="ui-widget-content ui-corner-all">
    <h3 class="ui-widget-header ui-corner-all">Hide</h3>
    <p>
    Click the button to hide me!
    </p>
  </div>
</div>

<select name="effects" id="effectTypes">
  <option value="blind">Blind</option>
  <option value="bounce">Bounce</option>
  <option value="clip">Clip</option>
  <option value="drop">Drop</option>
  <option value="explode">Explode</option>
  <option value="fade">Fade</option>
  <option value="fold">Fold</option>
  <option value="highlight">Highlight</option>
  <option value="puff">Puff</option>
  <option value="pulsate">Pulsate</option>
  <option value="scale">Scale</option>
  <option value="shake">Shake</option>
  <option value="size">Size</option>
  <option value="slide">Slide</option>
</select>

<button id="buttons" class="ui-state-default ui-corner-all">Hide</button>
</div><br /><br /><br /><br />

<div id ="widgets">
<h2> widgets </h2>
<div id="progressbar"></div><h3> Progress Bar </h3>

<div id="slider"></div> <h3> Slider </h3>
</div>
</body>
</html>
