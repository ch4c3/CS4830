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
}
#header{
  margin: 0 auto;
  text-align: center;
}
h1{
  font-family: 'Pacifico', cursive;
  font-size: 60px;
}
</style>
</head>
<body>
  <div id="header">
  <h1> Candace's Vacation Pictures</h1>
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
</div>
</body>
</html>
