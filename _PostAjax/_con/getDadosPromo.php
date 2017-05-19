<?php
    header('Content-Type: plain/text; charset=utf-8');
    //Conectando ao banco de dados
    $con = new mysqli("localhost", "root", "", "cadastro");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT * FROM promo ORDER BY id_promo DESC LIMIT 0,3");
    //$qryLista = mysqli_query($con, "SELECT * FROM postnew ORDER BY id DESC");

    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>