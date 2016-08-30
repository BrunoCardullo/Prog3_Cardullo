<html>
<head>
	<title>Aplicacion 01</title>
</head>
<body>

	<?php
	$num = 1;
    $cont = 0;
    while ($num <= 10) 
    {
    	$num += 1;
		echo $num;
		echo "<br>";
		$cont+=1;
    }

	/*for ($i=1; $num <= 1000; $i++) 
	{ 
		$num += $i;
		echo $num;
		$cont+=1;
	}*/

	echo "Se sumaron $cont numeros";
	?>

</body>
</html>