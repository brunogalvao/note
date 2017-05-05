<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?
include "fundo.php";
?>

<tr>
  <td align="center">


<form name="form1" method="post" action="cadastrarbd.php">

<table width="365" border="0">
  <tr>
    <td width="64">Nome:</td>
    <td width="285">
    <input type="text" name="nome" size="50" maxlength="50">
    </td>
  </tr>
  <tr>
    <td>Telefone:</td>
    <td>
    <input type="text" name="telefone" size="8" maxlength="8">
    </td>
  </tr>

  <tr>
    <td>CEP:</td>
    <td>
      <input type="text" name="cep" size="8" maxlength="8">
    </td>
  </tr>

  <tr>
    <td>Email:</td>
    <td>
    <input type="text" name="email" size="50" maxlength="50">
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Confirma"></td>
  </tr>
</table>
</form>


  </td>
</tr>
</table>
  

</body>
</html>
