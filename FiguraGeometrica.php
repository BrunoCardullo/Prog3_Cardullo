<html>
<head>
	<title>Figura Geometrica</title>
</head>
<body>
	<?php

	abstract class FiguraGeometrica
	{
		
		protected $_color;
		protected $_perimetro;
		protected $_superficie;

		public function __construct()
		{
			
		}

		protected function CalcularDatos()
		{

		}  


		public function Dibujar()
		{

		}

		public function GetColor()
		{
			return $this-> $_color
		}

		public function SetColor($color)
		{
			$this-> $_color = $color;
		}		

		public function ToString()
		{
			echo "Color: $_color<br>";
		}

	}

	?>

</body>
</html>