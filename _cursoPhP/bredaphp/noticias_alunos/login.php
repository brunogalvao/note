<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<script language="JavaScript">

function Verifica()
{
  var login;
  login=document.form1.login.value;

  if(login=="")
  {
    alert("Digite o login");
    return false;
  }



  var senha;
  senha=document.form1.senha.value;

  if(senha=="")
  {
    alert("Digite a senha");
    return false;
  }

}

//alert("oi");

</script>

<?
include "cabecalho.php"; 
?>


<center>
<form name="form1" method="post" action="principal.php" onSubmit="return Verifica()">

<table border="0">
<tr>
  <td>Login:
  </td>
  <td><input type="text" name="login" size="8" maxlength="8" />
  </td> 
</tr><tr>
  <td>Senha:
  </td>
  <td><input type="password" name="senha" size="8" maxlength="8" />
  </td> 
</tr><tr>
  <td>&nbsp;
  </td>
  <td>&nbsp;
  </td> 
</tr><tr>
  <td>&nbsp;
  </td>
  <td><input type="submit"  value="Confirmar"/>
  </td> 
</tr>
</table>
</form>
<br />
<a href="">Esqueceu a senha?</a>

<br />
<a href="">Cadastre sua senha</a>
</center>


<?
include "rodape.php"; 
?>

</body>
</html>
