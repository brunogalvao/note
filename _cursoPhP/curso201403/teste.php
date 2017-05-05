<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
		<title>TESTES</title>
		<style type="text/css">
		</style>
	</head>
<body>
	
	<?
		echo date('H:i:s');

		date_default_timezone_set ("Brazil/East");
	?>
<?
echo "<br />";
echo "<br />";

	echo "O numero arredondado é <b>98.442154255</b>";

echo "<br />";
echo "<br />";
	$num = 98.442154255;
	echo number_format($num,3);
	echo "<br />";
	echo "<br />";
	echo "<b>Number Format</b>";

echo "<br />";
echo "<br />";

	printf("%.3f", 98.442154255);
	echo "<br />";
	echo "<br />";
	echo "<b>Print F</b>";

echo "<br />";
echo "<br />";

$num1=10;
	echo gettype($num1);


echo "<br />";
echo "<br />";

/*Exemplo de FOR*/

for ($i = 1; $i < 10; $i++)
{
echo("Linha $i <br />");
}




?>


</body>
</html>