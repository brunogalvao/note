<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?
$login = $_POST['login'];
#echo 'Seu login é: '.$login;

echo "<br />";

$senha = $_POST['senha'];
#echo 'Sua senha é: '.$senha;

echo "<br /><br /><br /><br />";

if (($login == 'william') && ( $senha == 'pipoca'))
{ 
	echo "autenticado";
}

else
{
	echo "tente novamente";
}

?>
<body>
//Olá, você chegou na página Principal!

</body>
</html>