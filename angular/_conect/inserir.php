<?php
  //Conexão à base de dados
   mysql_connect("localhost", "root", "") or die(mysql_error());
   mysql_select_db("cadastro") or die(mysql_error());
 
   //recebe os parâmetros
    $preco = $_REQUEST['preco'];
    $descricao = $_REQUEST['descricao'];
    $img = $_REQUEST['img'];
 
    try
    {
        //insere na BD
        $sql = "INSERT INTO PROMO (preco, descricao, img) VALUES('".trim($preco)."','".trim($descricao)."','".trim($img)."')";
        $result = mysql_query($sql) or die(mysql_error());
 
        //retorna 1 para no sucesso do ajax saber que foi com inserido sucesso
        echo "1";
    } 
    catch (Exception $ex)
    {
        //retorna 0 para no sucesso do ajax saber que foi um erro
        echo "0";
    }

?>