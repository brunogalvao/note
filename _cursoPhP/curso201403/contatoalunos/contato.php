<html>
<head>
<title>Currículo William Hamilton dos Santos</title>
<link href="estilos/meusestilo.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="document.form1.nome.focus();">

<br><br>
<table>
<tr>
   <td width=10>&nbsp;
   </td>
   <td>
   <!-- posicionamento da página -->



<h2><font color=#CD9B1D>Cadastro de visitas</font></h2><br>


Deixei seu recado aqui.<br><br>

<form method="POST" action="mensagem.php" name="form1" onSubmit="return Verifica(this)">
<table border=0 cellpading=1 cellspacing=1>
<tr>
   <td width=135>Nome:
   </td>
   <td width=400><INPUT TYPE="text" NAME="nome" SIZE="60" MAXLENGTH="65" class="entrada">
   </td>
<tr>
</tr>
   <td>Email:
   </td>
   <td><INPUT TYPE="text" NAME="email" SIZE="60" MAXLENGTH="65" class="entrada">
   </td>
<tr>
</tr>
   <td>Gostou da página? 
   </td>
   <td><INPUT TYPE="radio" NAME="gostou" VALUE="sim" CHECKED>Sim
       <INPUT TYPE="radio" NAME="gostou" VALUE="nao">Não
   </td>
<tr>
</tr>
   <td>Recado: 
   </td>
   <td><TEXTAREA NAME="recado" ROWS="4" COLS="55"></TEXTAREA>
   </td>
</tr>
</tr>
   <td>&nbsp; 
   </td>
   <td>

   </td>
</tr>
</tr>
   <td>
   </td>
   <td>
<INPUT TYPE="reset" VALUE="Limpa campos" class="botao">
<input type=submit class="botao"  value = "Enviar">


   </td>
</tr>
</table>
</form>



<Script Language="JavaScript">
<!--

function Verifica()
{
  nome=document.form1.nome.value;
  // verifica se o nome está em branco

  if(nome =="")
  {
    alert("Digite seu nome");
    return false;
  }

  //verifica se o valor digitado é um número
  if(isNaN(nome)== false)
  {
    alert("O nome deve começar com uma letra");
    return false;
  }



  email=document.form1.email.value;
  // verifica se o email está em branco

  if(email =="")
  {
    alert("Digite seu email");
    return false;
  }



  uf=document.form1.uf.value;
  //verifica se foi selecionado um Estado
  if(uf =="")
  {
    alert("Um Estado deve ser selecionado")
    return false;
  }


  recado=document.form1.recado.value;
  //verifica se foi digitado algum recado
  if(recado=="")
  {
    alert("Alguma deve ser digitado no recado");
    return false;
  }


}
//-->
</Script>












   <!-- posicionamento da página -->
   </td>
</tr>
</table>


</body>
</html>