<?php

    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $img = $_POST['img'];

    if (!($preco) || !($descricao) || !($img)){
        echo "<p class='bg-danger text-warning'>Preencha todos os campos!</p>"; exit();
    }
    //Abrindo Conexao com o banco de dados
    $conexao = @mysql_connect("localhost", "root", "") or die("Não foi possivel conectar");
    mysql_select_db("cadastro",$conexao) or die ("Não conectou ao banco!!!");

    //Tratamento de acentuação dos itens
    mysql_query("SET NAMES 'utf8'");
    mysql_query('SET character_set_connection=utf8');
    mysql_query('SET character_set_client=utf8');
    mysql_query('SET character_set_results=utf8');

    //Utilizando o  mysql_real_escape_string voce se protege o seu código contra SQL Injection.
    $preco = mysql_real_escape_string($preco);
    $descricao = mysql_real_escape_string($descricao);
    $img = mysql_real_escape_string($img);

    $insert = mysql_query("insert into promo (preco,descricao,img) values ('{$preco}','{$descricao}','{$img}')");

    mysql_close($conexao);
    if($insert) {
        echo "<p class='bg-success text-success'>Cadastro Realizado!</p>";
    }else {
        echo "<p class='text-warning'>Erro ao Cadastrar!</p>";
    }

?>