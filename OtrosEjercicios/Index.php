<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">
</head>
<body>
	<div class ="CajaInicio Animated bounceIn">
	<form action = "Destino.php" Method ="Post" id= "FormIngreso">
		<label>Nombre:</label>
		<input type = "Text" name="Nombre" >
		<input type = "Text" name = "NumeroUno">
		<input type = "Submit" class= "MiBotonUtnMenuInicio">


	</form>
</div>

	<?php

if (isset($_GET['Nombre'])) 
{
	echo $_GET['Nombre'];
}
else
{
	echo "Primer Ingreso";
}
?>
</body>
</html>