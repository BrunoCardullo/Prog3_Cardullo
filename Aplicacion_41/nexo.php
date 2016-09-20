<?php

require_once 'Archivos.php';

if (Archivos::GuardarArchivo() == true) 
{
	echo "Se cargo correctamente el archivo";
}

else
{
	echo "No se cargo el archivo";
}

?>