<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
		<title>Mensagem</title>
		<link href="estilos/meusestilo.css" rel="stylesheet" type="text/css">
	</head>
<body>

	<?
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$gostou=$_POST['gostou'];
	$recado=$_POST['recado'];

	$to='admin@brunogalvao.w.pw';/*para quem vai*/
	$subject='mensagem do site';/*mensagem*/

	$separador='<br />';
	$message='Nome='.$nome.$separador.'E-mail='.$email.$separador.'Gostou='.$gostou.$separador.'Recado='.$recado;

	$from='admin@brunogalvao.w.pw';

	echo $message;

	mail($to,$subject,$message,$from);

	?>

	<p>Seu cadastro foi enviado com sucesso !</p>
	Obrigado por deixar o seu recado !

</body>
</html>