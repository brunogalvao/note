<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">


function createRequest() 
{
  try
  {
    request = new XMLHttpRequest();
  } 
  catch (tryMS)
  {
    try 
	{
      request = new ActiveXObject("Msxml2.XMLHTTP");
    } 
	catch (otherMS)
	{
      try
	  {
        request = new ActiveXObject("Microsoft.XMLHTTP");
      } 
	  catch (failed)
	  {
        request = null;
      }
    }
  }	
  return request;
}  



function calculaForca()
{

  var senha = document.getElementById("senha").value;
  var url="calcula_forca.php?senha=" + escape(senha);

  createRequest();
  request.open("POST",url,true);
  request.onreadystatechange = atualizaTabela;
  request.send(null);

}



function atualizaTabela()
{
  if (request.readyState == 4)
  {
     if (request.status == 200)
	 {
   	    var tabela = document.getElementById("dv_tabela");
        tabela.innerHTML = request.responseText;   
	 }	
  }	 
}



</script>

</head>

<body>

<form name="form1" method="post" action="">

<br /><br />
Digite a Senha: <input type="password" name="senha" id="senha" size="8" maxlength="8" onKeyUp="calculaForca();"  /> 
<br /><br />

<table border="0">
<tr> 
  <td width="110">Força da senha:
  </td>
  <td width="300"><div id="dv_tabela">
  
      <table border="1" cellspacing="0" cellpadding="0">
      <tr> 
        <td width="50">&nbsp;</td>
        <td width="50">&nbsp;</td>
      </tr>
      </table>
      
      </div>
  </td> 
</tr>
</table>       
      
      
      
</form>


</body>
</html>