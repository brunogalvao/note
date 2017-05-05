<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
echo "<h1>Calculadora</h1>";
$num1 = 10;
$num2 = 3;

#echo "O resultado da soma de $num1 com $num2 é ";
#echo $num1 + $num2;

include "matlib.php";

$resultado = Adicao($num1,$num2);
echo $resultado;


?>

</body>
</html>