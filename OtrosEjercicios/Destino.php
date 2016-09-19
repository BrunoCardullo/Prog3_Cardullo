<?php
//var_dump($_GET);
//echo $_GET('Nombre')
if (isset($_GET['Nombre'])) 
{
	echo $_GET['Nombre'];
}
else
{
	echo "Primer Ingreso";
}

var_dump($_POST);
?>