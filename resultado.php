<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php 

 if (isset($_GET["color"]))
 {
 	# code...
 	if ($_GET["color"] == 'Azul') {
 		# code...
 	}
 }
  ?>
  <div style="background-color: blue">
  	<h1 style="color: yellow"> Hola</h1>
  </div>

 <?php 

 if (isset($_GET["color"]))
 {
 	# code...
 	if ($_GET["color"] == 'Rojo') {
 		# code...
 	}
 }
  ?>
  <div style="background-color: red">
  	<h1 style="color: white"> Hola</h1>
  </div>
  
  <?php 

 if (isset($_GET["color"]))
 {
 	# code...
 	if ($_GET["color"] == 'Amarillo') {
 		# code...
 	}
 }
  ?>
  <div style="background-color: yellow">
  	<h1 style="color: blue"> Hola</h1>
  </div> 
</body>
</html>