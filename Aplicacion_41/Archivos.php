<?php

class Archivos
{
	public static function GuardarArchivo()
	{
			if($_FILES["archivos"]['error'])
			{
				echo "Error de archivo";
				echo "<br> </br>";
				return false;
			}
			else
			{
				$nombreArchivo = $_FILES['archivos']['name'];
				$dividirArchivo = explode('.', $nombreArchivo);
				$tipoArchivo = $dividirArchivo[1];
				$rutaArchivoTMP = $_FILES['archivos']['tmp_name'];
				$rutaDestino= "Uploads/$nombreArchivo";
				$tamanio =$_FILES['archivos']['size'];

    			if($tipoArchivo == "doc" || $tipoArchivo == "docx")
    			{
    				if ($tamanio < 60000) 
    				{
    					move_uploaded_file($nombreCompleto , $rutaDestino);
    					return true;
    				}
    			}

    			if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "gif")
    			{
    				if ($tamanio < 300000) 
    				{
    					move_uploaded_file($nombreCompleto , $rutaDestino);
    					return true;
    				}
    			}

    			else
    			{	
    				if (tamanio < 500000) 
    				{
    					move_uploaded_file($nombreCompleto , $rutaDestino);
    					return true;
    				}

    			}
    						
			}
			return false;

	}
}


?>