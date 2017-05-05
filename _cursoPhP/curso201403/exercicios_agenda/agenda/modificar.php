<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title></head>

<body>

<?
include "conecta.php";

$resultado=mysql_query("select * from contato");

include "cabecalho.php";
?>

<table border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="80"><strong>Nome</strong></td>
    <td width="80"><strong>Telefone</strong></td>
    <td width="100"><strong>Email</strong></td>
    <td width="150" colspan="2"><strong>Ação</strong></td>
  </tr>
<?
while($linha = mysql_fetch_array($resultado))
{
  $idcontato = $linha['idcontato']; 
  $nome      = $linha['nome'];
  $telefone  = $linha['telefone'];
  $email     = $linha['email'];
  $cep       = $linha['cep'];
?>  
  <tr>
    <td><? echo $nome;  ?></td>
    <td><? echo $telefone; ?></td>
    <td><? echo $email; ?></td>
    <td><? echo $cep; ?></td>
    
    <td>
      <form method="post" action="modificarcad.php?idcontato=<? echo $idcontato; ?>">
        <input type="submit" value="Alterar" />
      </form>
    </td>

    <td>
      <form method="post" action="apagar.php?idcontato=<? echo $idcontato; ?>">
         <input type="submit" value="Apagar" />
      </form>
    </td>
  </tr>
<?
}
?>  
  
</table>
<br /><br />
<a href="principal.php">Voltar para a tela principal</a>
<br /><br />

<? include "rodape.php"; ?>


</body>
</html>
