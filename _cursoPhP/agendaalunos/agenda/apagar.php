<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
include "conecta.php";

$idcontato = $_GET['idcontato'];
$resultado = mysql_query("delete from contato where idcontato=$idcontato;");
include "cabecalho.php";

?>
<h3>Exclusão realizada com sucesso!</h3>

<br />
<a href="principal.php">Voltar para a tela principal</a>

<br /><br /><br />

<?
include "rodape.php";
?>


</body>
</html>