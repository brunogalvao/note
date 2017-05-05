<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
		<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
	<article>
	
	<p> </p>
	
	</article>

<?

$login = $_POST ['login'];
#echo 'Seu login é: '.$login;

$senha = $_POST['senha'];
#echo 'Sua senha é: '.$senha;

if (($login == 'bruno') && ($senha == 'galvao')) # E &&, OU ||, não A.
{
	echo "autenticado";
}
else
{
	echo "tente novamente";
}



?>

</body>
</html>