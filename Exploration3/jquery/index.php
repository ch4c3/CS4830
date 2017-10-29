<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exploration 3</title>
<!-- Jquery UI imports-->
<link href="jquery-ui.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text" rel="stylesheet">

<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<script>
$( function() {
  $( "#accordion" ).accordion();
} );
$( function() {
   $( "#tabs" ).tabs();
 } );
 $( function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "#info" )
            .html( "Thanks for visiting!" );
      }
    });
  } );
</script>
<style>
#accordion{
  width: 400px;
  height: 100px;
  margin: 0 auto;
}
.ui-state-default{
  background: white;
  color: black;
}

.ui-widget-content{
  background: white;
  color: black;


}
#header{
  margin: 0 auto;
  text-align: center;
}
h1{
  font-family: 'Pacifico', cursive;
  font-size: 60px;
}
#tabs{
  width: 600px;
  height: 300px;
  margin: 0 auto;
}
#draggable { width: 100px; height: 100px; padding: .5em; float: right; margin: 10px 10px 10px 0; }
 #droppable { width: 150px; height: 150px; padding: .5em; float: right; margin: 10px; }
.wrapper1{
  padding-top: 550px;
  margin: 0 auto;
  align-items: center;
}
</style>
</head>
<body>
  <div id="header">
  <h1> Candace's Website</h1>
</div>


<div id="tabs">
  <ul>
    <li><a href="#tabs-1">About me</a></li>
    <li><a href="#tabs-2">Places I've traveled</a></li>
    <li><a href="#tabs-3">Fun Facts</a></li>
  </ul>
  <div id="tabs-1">
    <p>My name is Candace Hicks and I am an IT major at the University of Missouri. I'm 21 years old and I love to travel, hangout with friends,
    and read. I also enjoy taking pictures and learning new things. I'm happy you guys are checking out my page :)</p>
  </div>
  <div id="tabs-2">
    <p> I've traveled to the following places:
     <ul>
       <li>Singapore</li>
       <li>Washington DC</li>
       <li> San Francisco</li>
       <li> Los Angeles</li>
       <li>Miami </li>
       <li> New York</li>
       <li> Cayman Islands</li>
       <li> Thailand </li>
     </ul></p>
  </div>
  <div id="tabs-3">
    <p>
      <ul>
        <li>I'm orignally from Chicago </li>
        <li>I love to workout and I run about 4 miles a day</li>
        <li>I am a vegan</li>
    </ul>
  </p>
  </div>
</div>
  <div id="accordion">
  <h3>LA Observatory</h3>
  <div>
    <img src="../candace.jpg" alt="LA" height="300" width="300">
  </div>

  <h3>Napa Valley</h3>
  <div>
    <img src="../candace2.jpg" alt="Napa" height="300" width="300">
  </div>
  <h3>Wynwood Art District</h3>
  <div>
  <img src="../candace3.jpg" alt="Wynwood" height="300" width="300">
  </div>
  <h3>Miami Beach</h3>
  <div>
  <img src="../candace4.jpg" alt="Miami" height="300" width="300">
  </div>

<h3>Night Out</h3>
<div>
<img src="../candace5.jpg" alt="Night" height="300" width="300">
</div>

</div>
<div class="wrapper1">
<div id="draggable" class="ui-widget-content">
  <p>Drag me to the box!</p>
</div>

<div id="droppable" class="ui-widget-header">
  <p id="info">The box</p>
</div>
</div>
</body>
</html>
