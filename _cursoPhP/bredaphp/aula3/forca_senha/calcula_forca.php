<?php

$senha = $_REQUEST['senha'];


//Tamanho da string
$tamanho = strlen($senha);


if($tamanho>=5)
{

  //zera os indicadores
  $temletra    = 0;
  $temnumero   = 0;
  $temespecial = 0;
 
  $i=0;
 
  while($i<$tamanho)
  {       
	$carac = substr($senha, $i, 1);
	
	switch($carac)
    {
	# Letras
    case "a":     
	  $temletra = 1;	
      break;

	case "s":     
	  $temletra = 1;	
      break;

	case "d":     
	  $temletra = 1;	
      break;

    case "f":     
	  $temletra = 1;	
      break;

    case "g":     
	  $temletra = 1;	
      break;

    case "h":     
	  $temletra = 1;	
      break;	  
	
	
	#Números
	case "1":     
	  $temnumero = 1;	
      break;

	case "2":     
	  $temnumero = 1;	
      break;

	case "3":     
	  $temnumero = 1;	
      break;

	case "4":     
	  $temnumero = 1;	
      break;

	case "5":     
	  $temnumero = 1;	
      break;	

    #Caracteres especiais
    case "!":     
	  $temespecial = 1;	
      break;

	case "@":     
	  $temespecial = 1;	
      break;
	  
	case "#":     
	  $temespecial = 1;	
      break;  
	}
	
	$i++;
  }


  if (($temletra==1)&&($temnumero==0)&&($temespecial==0)) 
  {
    //$tabela = "Senha fraca";
	
	$tabela = "
	 <table border=1 cellspacing=0 cellpadding=0>
      <tr> 
        <td width=50 bgcolor=#CC0033>&nbsp;</td>
        <td bgcolor=#CC0033>Senha fraca</td>
      </tr>
      </table>";
  } 
  
  if (($temletra==1)&&($temnumero==1)&&($temespecial==0))
  {
    //$tabela = "Senha média";
	
	$tabela = "
	 <table border=1 cellspacing=0 cellpadding=0>
     <tr> 
        <td width=50 bgcolor=#FFCC33>&nbsp;</td>
        <td bgcolor=#FFCC33>Senha média</td>
     </tr>
     </table>";
	
  }
  
  if (($temletra==1)&&($temnumero==1)&&($temespecial==1)) 
  { 
    //$tabela = "Senha forte";
	
	$tabela = "
	 <table border=1 cellspacing=0 cellpadding=0>
     <tr> 
        <td width=50 bgcolor=#66CC66>&nbsp;</td>
		<td bgcolor=#66CC66>Senha forte</td>		
     </tr>
     </table>";
  }
 
 
}
else
{

  $tabela = "
	 <table border=1 cellspacing=0 cellpadding=0>
      <tr> 
        <td width=50 bgcolor=#CC0033>&nbsp;</td>
        <td bgcolor=#CC0033>Senha fraca</td>		
      </tr>
      </table>";
  
}


echo $tabela;

?>
