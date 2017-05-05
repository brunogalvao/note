<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Fundamentos</title>
</head>

<body>
	<!-- comentário em html -->
    
    <?php
	// comentário de linha
	
	# comentário de linha, também
	
	/* comentário
	de
	bloco
	*/
	
	/*
	$nome='Pedro';
	echo $nome;
	*/
	
	/*
	#operações matemáticas
	$num1 = 3;
	$num2 = 5.2;
	echo $num1 + $num2
	*/
	
	/*
	$nome = "Pedro";
	$num1 = 5;
	echo $nome + $num1;
	*/
	
	/*
	#diferença entre aspas simples e aspas duplas
	$nome = "William";
	$sobrenome = 'Santos';
	$espaco = ' ';
	echo $nome.$espaco.$sobrenome;
	
	echo "<br>";
	echo "Script em PHP<br /> feito por $nome<br />";
	echo 'Script em PHP<br /> feito por $nome';
	*/
	
	/*
	#constantes
	define('pi', 3.1415926536);
	echo pi;
	echo '<br />';
	echo number_format(pi,2);
	
	$raio = 4;
	$circun = 2 * pi * $raio;
	echo '<br />'.$circun;
	*/
	
	/*
	#Array ou matrizes
	$cor[0]="oi";
	$cor[1]="vermelho";
	$cor[2]="azul";
	$cor[34]=5;
	$cor["teste"]=2;
	
	echo $cor[2]."<br />";
	echo $cor["teste"]."<br />";
	echo $cor[0]."<br />";
	echo $cor[30]."<br />";
	*/
	
	/*
	#Comando de decisão
	$z=18; $a=3;
	if($z<$a)
	{
		echo "z é menor que a";
	}
	else
	{
		echo "z não é menor que a";
	}
	*/
	
	/*
	#Estruturas de controle - enquanto
	$z=5; $a=0.0;
	while($z>$a)
	{
		$a++;
		//echo $a.'<br />;
		echo number_format($a,2).'<br />';
	}
	*/
	
	/*
	#Constantes pré-definidas
	$hoje = getdate();
	echo $hoje.'<br />';
	$dia = $hoje["mday"];
	$mes = $hoje["mon"];
	$ano = $hoje["year"];
	
	echo "$ano-$mes-$dia";
	*/
	
	$a = 10;
	while($a<=25)
	{
		if ($a%3 == 0)
		{
			echo $a.'<br />';
		}
		$a++;
	}
	
	
	
	?>
</body>
</html>