<?

include "conecta.php";

$resultado=mysql_query("select * from usuario");

/*echo $resultado;*/
?>

<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<td width="150"><strong>Login</strong></td>
		<td width="150"><strong>Senha</strong></td>
		<td width="20"><strong>id</strong></td>
	</tr>


<?

while
	($linha = mysql_fetch_array($resultado))
{
$login = $linha ['login'];
$senha = $linha ['senha'];
$id = $linha ['idusuario'];
?>
	<tr>
		<td><? echo "$login" ?></td>
		<td><? echo "$senha" ?></td>
		<td><? echo "$id";?></td>
	</tr>
<?
}
?>

</table>