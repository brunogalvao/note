<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
$titulo  = $_POST['titulo'];
$noticia = $_POST['noticia'];


include "conecta.php";

$resultado=mysql_query("insert into noticia(titulo,noticia) values ('$titulo','$noticia');");

include "cabecalho.php";
?>
 
 <h2>Inclusão realizada com sucesso!</h2>

<br /><br /><br /><br /><br />
<a href="principal.php">Voltar para a página principal</a>  


<? include "rodape.php"; ?>

</body>
</html>