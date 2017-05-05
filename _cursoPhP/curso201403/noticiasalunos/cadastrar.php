<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<? include "cabecalho.php"; ?>


<form name="form1" method="post" action="cadastrarbd.php">

<table border="0">
<tr>
    <td>Título:</td>
    <td><input type="text" size="60" maxlength="60" name="titulo"/></td>
  </tr>
  <tr>
    <td>Notícia:</td>
    <td><textarea cols="47" rows="5" name="noticia"> </textarea></td>
  </tr>  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Confirmar"/></td>
  </tr>
</table>


</form>

<? include "rodape.php"; ?>

</body>
</html>
