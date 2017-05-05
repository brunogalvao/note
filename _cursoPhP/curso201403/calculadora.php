<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
		<title>Fundamentos com PHP</title>
		<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		h1{
			font-size: 150%;
			font-family: Arial, sans-serif;
		}
		article{
			width: 980px;
			overflow: hidden;
			background: #f5f5f5;
			margin: 0 auto;
		}
		</style>
	</head>
<body>
<article>
	<?php
	echo "<h1>Calculadora</h1>";
	$num1 = 10;
	$num2 = 3;

	#echo"O resultado da soma de $num1 com $num2 é";
	#echo $num1 + $num2;
	
	include "matlib.php";
	$resultado = Adicao ($num1,$num2);
	echo $resultado;
	
	?>
</article>

</body>
</html>