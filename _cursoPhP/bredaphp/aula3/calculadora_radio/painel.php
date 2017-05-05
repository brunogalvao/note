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
  var num1;
  num1=document.form1.num1.value;

  if(num1=="")
  {
    alert("Digite o número 1");
    return false;
  }   

  var num2;
  num2=document.form1.num2.value;

  if(num2=="")
  {
    alert("Digite o número 2");
    return false;
  }   

}
</script>


<form name="form1" method="post" action="display.php" onSubmit="return Verifica()">

  <table border="0">
  <tr>
    <td width="61">Número1:</td>
    <td width="138"><input type="text" name="num1" size="8" maxlength="8" /></td>
  </tr>
  <tr>
    <td>Número2:</td>
    <td><input type="text" name="num2" size="8" maxlength="8" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
<input type="radio" name="oper" value="adic" checked="checked"/>+    
    
<input type="radio" name="oper" value="sub" />-

<input type="radio" name="oper" value="mult" />*
    
<input type="radio" name="oper" value="div" />/    
        
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Confirmar" /></td>
  </tr>
</table>
</form>
</body>
</html>
