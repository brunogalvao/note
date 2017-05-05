<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minha Agenda</title>
</head>
<body >

<?
$_SESSION['autorizado']= 'nao';
?>


<!--função de verificar campos-->

<script language="javascript">

function Verifica()
{
	var login=document.inicial.login.value;
	if(login=="")
	{
	alert("Digite seu login!!");
	return false;
	}
	
	var senha=document.inicial.senha.value;
	if(senha=="")
	{
	alert("Digite sua senha!!");
	return false;
	}
 }

</script>


<center>
<br /><br /><br /><br />

<table background="imagens/montanhas_azuis.jpg" width="600" heigth="1000">
<tr>
  <td>
  <br/>
  <font size="12" color="#cc9900">
    <center><b>Minha Agenda</b></center>
  </font> 
  <br/>
  </td>
</tr>
<tr>
  <td>


<center>
<form name="inicial" method="post" action="principal.php" onsubmit="return Verifica(this)">


<table cellpadding=10 celspacing=10 width=200>
<tr>
  <td><b>Login:</b>
  </td>
  <td align="left">
     <input type="text" name="login" size="10" maxlength="10">
  </td>
</tr>

<tr>
  <td><b>Senha:</b>
  </td>
  <td align="left"><input type="password" name="senha" size="10" maxlength="10">
  </td>
</tr>
<tr>
  <td>&nbsp;
  </td>
  <td><input type="submit" value="Confirma">
  </td>
</tr>
</table>
</form>


</center>
</td>
</tr>
</table>
</center>

</body>
</html>
