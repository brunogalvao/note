<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
$login = $_POST['login'];
#echo $login.'<br />';

$senha = $_POST['senha'];
#echo $senha;

include "conecta.php";

$resultado=mysql_query("select nome from usuario where login='$login' and senha='$senha'");
// envia a consulta para a tabela
  

$conta_linha=mysql_num_rows($resultado); 
// conta o total de linhas recuperadas



#if ( ($login=='william') && ($senha=='pipoca') )
if ($conta_linha==1)
{
 
$linha=mysql_fetch_array($resultado); 
// recupera as linhas da tabela de acordo com a consulta. No caso carrega apenas uma linha por vez, começando pela primeira
 
$nome=$linha['nome'];  
// recupera o conteúdo do campo


include "cabecalho.php"; 
?>
 
  Bem-vindo <? echo $nome; ?>
  </td>
</tr>
<tr>
  <td>

<center>  
<a href="cadastrar.php">Cadastrar</a> * Apenas esta opção está funcioanando!<br />
<a href="listar.php">Listar</a><br />
<a href="modificar.php">Modificar</a><br />
</center>
<br /><br /><br /><br />

<?
include "rodape.php"; 
}
else
{
  echo '<font color="red">Acesso não autorizado.</font>';
}
?>




</body>
</html>
