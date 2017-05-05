<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>




<?php

$num1 = $_POST['num1'];

$num2 = $_POST['num2'];



if (($num1!='') &&($num2!=''))
{

echo 'O primeiro número é: '.$num1;
echo '<br/>';
echo 'O segundo número é: '.$num2;


  $oper = $_POST['oper'];

  echo '<br/>Operação: ';
  include "biblioteca_matematica.php";

  switch($oper)
  {
    case "soma":
      print('Soma');
      $result = Soma($num1,$num2);	
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
}

echo '<br/><br/>';

?>



<Script Language="JavaScript">

function Verifica()
{

  var num1;
  var num2;

  num1 = document.form1.num1.value;
  num2 = document.form1.num2.value;

  if(num2=="")
  {
    alert("Digite o número 1");
    return false;
  }

  if(num2=="")
  {
    alert("Digite o número 2");
    return false;
  }


}



</Script>



<form name="form1" method="post" action="painel.php" onsubmit="return Verifica(this)">
<table width="487" border="0">
  <tr>
    <td width="75">Número 1:</td>
    <td width="402"><input type="text" maxlength="4" size="4" name="num1" /></td>
  </tr>
  <tr>
    <td>Número 2:</td>
    <td><input type="text" maxlength="4" size="4" name="num2" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="radio" name="oper" value="soma" checked="checked"/>+
      <input type="radio" name="oper" value="sub" />- 
      <input type="radio" name="oper" value="mult" />*
      <input type="radio" name="oper" value="div" />/
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Calcular"/></td>
  </tr>
</table>
<br />
</form>








</body>
</html>
