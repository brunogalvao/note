<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
include "conecta.php";

$resultado=mysql_query("select * from promo");

#echo $resultado;
?>

<table border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="150"><strong>Login</strong></td>
    <td width="150"><strong>Senha</strong></td>
  </tr>

<?
while($linha = mysql_fetch_array($resultado))
{
$login = $linha['login'];
$senha = $linha['senha'];
?>  
  <tr>
    <td><? echo $login; ?></td>
    <td><? echo $senha; ?></td>
  </tr>
<?
}
?>  
</table>


</body>
</html>