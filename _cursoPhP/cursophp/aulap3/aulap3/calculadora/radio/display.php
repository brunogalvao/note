<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
$num1 = $_POST['num1'];
echo 'O primeiro número é: '.$num1;

echo '<br/>';
$num2 = $_POST['num2'];
echo 'O segundo número é: '.$num2;

echo '<br/>';
$oper = $_POST['oper'];
//echo '<br/>Operação: '.$oper;

echo '<br/>Operação: ';

include "biblioteca_matematica.php";

switch($oper)
{
  case "adic":
    print('Adição');
	$result = Adicao($num1,$num2);	
  break;

  case "sub":
    print('Subtração');
	$result = Subtracao($num1,$num2);	
  break;

  case "mult":
    print('Multiplicação');
	$result = Multiplicacao($num1,$num2);	
  break;

  case "div":
    print('Divisão');
	$result = Divisao($num1,$num2);	
  break;
}  

echo '<br/>';
echo 'Resultado: '.$result;

?>

</body>
</html>
