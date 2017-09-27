<!DOCTYPE html>
<html lan="en">
<head>
  <title> Candace's Photo Database </title>
  <!-- Bootstrap for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- for font used -->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <style>

      body{
        background-color: #000000;

      }
      .header{

        text-align: center;
      }
      .container{
        text-align: center;
      }
      h1, u{
        color: white;
        font-family: 'Indie Flower', cursive;

      }
    </style>
</head>

<body>
  <div class="header">
  <h1><u> Candace's Photo Database &hearts;</u> </h1>
</div>
</body>
<?php
/* file that holds my database info*/
  include("CONFIG.php");
/* connecting to my database instance */
  $mysqli = new mysqli($HOST_NAME,$USERNAME, $PASSWORD, $DATABASE);

/*error checking if connection was successful*/
  if($mysqli->connect_errno){
	echo "Could not connect to database";
	exit();
}

/*query to the database */
$sql = "SELECT photo_path FROM pictures;";
$result = $mysqli->query($sql);

/* a table of my pictures from the database*/
echo "<div class = 'container'>";

while($row = $result->fetch_array(MYSQLI_NUM)){
	foreach($row as $data){
		echo "<div><img src='" . $data . "' class='img-thumbnail' ></div>";
	}

}
echo "</div>";
 ?>

</html>
