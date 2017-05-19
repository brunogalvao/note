<?php

/*  
    $conexao = mysql_connect("localhost","root",""); // Mapeando o caminho do banco de dados
    if (!$conexao) // Verificando se existe conexão com o caminho mapeado
    {
    die('Erro ao conectar: ' . mysql_error()); // Caso o caminho esteja errado, o usuário ou a senha esteja errado, irá mostrar esta mensagem
    }

    mysql_select_db("cadastro", $conexao); // Selecionando o banco de dados

    $id = $_GET['id']; // Recebendo o valor enviado pelo link

    mysql_query("DELETE FROM postnew WHERE id='".$id."'"); // A instrução delete irá apagar todos os dados da id recebida

    mysql_close($conexao); // Fechando a conexão com o banco de dados
*/

    $host = "localhost";
    $user = "root";
    $pwd  = "";
    $bd   = "cadastro";

    $mysqli = new mysqli($host, $user, $pwd, $bd);

    $id = $_GET['id'];

    $query = ("DELETE FROM promo WHERE id_promo = $_GET[id]");

    $result = mysqli_query($mysqli, $query);
    
    header("location: ../_assent/_adm/adm.php");

?>