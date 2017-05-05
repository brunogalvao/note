<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	
		<title>Fundamentos com PHP</title>
	</head>
<body>
<article>
	<h1>Fundamentos do PHP</h1>
	
	<?php
	//comentário de linha

	#comentário de linha

	/*comentário
	de
	linha
	*/

/* Informações sobre a instalação do PHP */
		#phpinfo();
	
	/*como atribuir valors a variáveis*/
	/*
	echo "curso do";
	echo "&nbsp;&nbsp;>&nbsp;";#espaços maiores que 1 terão que ser anexados como na forma de HTML

	$nome='Pedro';

		echo $nome;
	*/

	#diferença entra aspas simples e aspas duplas
		/*
		$nome="william";
		$sobrenome='santos';
		$separador=' ';
		
			echo $nome.$separador.$sobrenome;

		echo "<br />";
		echo "Script em PHP<br /> feito por $nome<br />"; #aspas duplas substitui a variavel pelo seu valor.
		echo 'Script em PHP<br /> feito por $nome'; #aspas simples não substitui a variavel pelo seu valor.
		*/

	#operações matemáticas
		/*
		$num1=3;
		$num2=5.2;

		echo $num1 + $num2;
		*/
	
	#Impresão de comando HTML, usando entities
		/*
		echo "O comando de título em html é <br />&lt;h1&gt;&lt;/h1&gt;";#uso de http://htmlentities.net/, proteção do banco de dados.
		*/

	#Mistura de Tipos
	/*
	$nome="pedro";
	$num1=5.1;
	$separador=" ";

		echo $nome.$separador.$num1;
	*/
	
	#Tipo Booleano
	/*
	$bolet=true;
	$bolef=false;

	echo $bolef;
	*/

	#Constantes
	/*
	define('pi', 3.1415926536);
	print pi;

	
	$raio = 4;
	$circum = 2 * pi * $raio;

	echo $circum;
	*/

	#Arrays ou matrizes
	/*
	$cor[0]="oi";
	$cor[1]="vermelho";
	$cor[2]="azul";
	$cor[34]=5;
	$cor["teste"]=2;


	echo $cor[2]."<br />";
	echo $cor["teste"]."<br / >";
	echo $cor[0]."<br />";
	echo $cor [30];
	*/

	#Comando de Decisão IF (se)
	/*
	$z=3;
	$a=3;

	if ($z<$a) # quando for apenas uma consideração, não e nescessario os colchetes {}.
	{
		echo "Z é menor que A";
	}
	else
	{
		echo "Z não é menor que A!";
	}
	*/

	#Estrutura de Controle - enquanto
	/*
	$z=5;
	$a=0;

	while ($z>$a)
	{
		$a ++;
		echo $a;
		echo '<br />';
	}
	*/

	#Constantes pré - definidas
	/*
	$hoje = getdate(); #dia está estabelecido em Berlim, mudar para o nosso Pais.
	echo $hoje;
	$dia = $hoje["mday"];
	$mes = $hoje["mon"];
	$ano = $hoje["year"];

	echo $dia.$mes.$ano;
	*/



		

	?>
</article>


</body>
</html>