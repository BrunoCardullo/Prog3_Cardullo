<?php


//$pruebaTexto = var_dump($_POST['texto']);
//$pruebaImagen = var_dump($_FILES["subirArchivos"]);

//echo $pruebaTexto;
//echo $pruebaImagen;

$rutaFotoTMP = $_FILES['archivos']['tmp_name'];
$nombreFoto = $_FILES['archivos']['name'];
$rutaDestino= "Fotos/$nombreFoto";


if($nombreFoto == "")
	echo "No se cargo ninguna imagen!!!!";

else
{
	$dividirFoto = explode('.', $nombreFoto);
	$tipoFoto = $dividirFoto[1];

	if ($tipoFoto == 'PNG' || $tipoFoto == 'png') 
	{
		echo "No se admiten fotos .png";
		echo "No se guardo el archivo";
	}

	else 
	{
		move_uploaded_file($rutaFotoTMP,$rutaDestino);
		echo "Se guardo el archivo";
	}
}

?>