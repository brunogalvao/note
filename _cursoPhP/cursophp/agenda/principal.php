<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
include "conecta.php";

$conta_linha=0;
if ($_SESSION['autorizado']== 'nao')
{
  $login=$_POST['login'];
  //echo $login."<br/>";

  $senha=$_POST['senha'];
  //echo $senha."<br/>";  
  
//  $senha = addslashes($senha);


  
  $resultado=mysql_query("select nome from usuario where login='$login' and senha='$senha'");

  $conta_linha=mysql_num_rows($resultado); 
  // conta o total de linhas recuperadas

  $linha=mysql_fetch_array($resultado);
  $nome=$linha['nome'];  
}


if( ($conta_linha == 1)||($_SESSION['autorizado']=='sim') )
{
  
$_SESSION['autorizado']='sim';
  
include "fundo.php"; 
?>

<tr>
  <td align="center">
  <h3>Bem vindo! <? #echo $nome; ?></h3>
  </td>
</tr>
<tr>
  <td>

<center>  
<a href="cadastrar.php">Cadastrar</a><br />
<a href="listar.php">Listar</a><br />
<a href="modificar.php">Modificar</a><br />
</center>

 <br /><br /><br /><br />
 </td>
</tr>
</table>  


<? 
}
else
{
?>
<span style="color:#CC0000">Acesso não autorizado!</span>
<?
}
?>

</body>
</html>
