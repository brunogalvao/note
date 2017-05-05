<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo "<h1>Fundamentos de PHP</h1>";
?>
<h2>Característica do PHP</h2>

<?php
#echo "O comando de parágrafo é &lt;p&gt;&lt;/p&gt;";

#echo '<br />uso das aspas simples';

#echo "<br />uso das aspas duplas";


# variáveis
#$nome='william';

#echo $nome;



#difença entre aspas simples e duplas
#$nome='William';

#echo "Script em PHP<br /> feito por $nome<br/>"; 

#echo 'Script em PHP<br /> feito por $nome'; 



#strings e concatenação
#$nome="william";
#$sobrenome ="santos";
#$quebra = "<br />";
#$espaco =" ";
#echo $quebra.$nome.$espaco.$sobrenome;


#operações matemáticas
#$num1=3;

#$num2=5.2;
#echo $num1 + $num2;




#redefinição do tipo da  variável
#$nome="william";
#$nome=3;
#echo $nome;




#constantes 
#define('pi',3.1415926536);
#echo pi;

#$raio   = 4;
#$circun = 2 * pi * $raio;
#echo $circun;

#print "oi";



#Arrays ou matrizes
#$cor[1]="vermelho";
#$cor[2]="azul";
#$cor[34]= 5;
#$cor["teste"]=2;
 
#echo $cor[2]."<br />";
#echo $cor["teste"];





#Comando de decisão
/*
$z=1;
$a=3;

if($z<$a)
{
  echo "z é menor que a";
}
else
{
  echo "z não é menor que a!";
}
*/


#estruturas de controle - enquanto
/*
$z=5;
$a=0;
while($z>$a)
{
  $a++;
  echo $a;
  echo '<br />';
}
*/



#constantes pré-definidas
/*
$hoje = getdate();
$dia = $hoje["mday"];
$mes = $hoje["mon"];
$ano = $hoje["year"];

echo $dia.$mes.$ano;

echo "<br />".pi(); 
 */

/* 
$a=3;

$a = $a +2;
$a += 2;

$a = $a + 1;
$a++;
*/

echo "12 15 18 21 24";
 
?>




</body>


