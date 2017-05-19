<?php
     
    //Conectando ao banco de dados
    $con = new mysqli("localhost", "root", "", "cadastro");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    //$qryLista = mysqli_query($con, "SELECT * FROM post ORDER BY id_txt DESC LIMIT 0,3");
    $qryLista = mysqli_query($con, "SELECT * FROM promo ORDER BY id_promo DESC");

    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>