<?php 
$arquivo = explode("/",$_SERVER['REQUEST_URI']);
$n = count($arquivo) - 1;
$nome = explode(".",$arquivo[$n]);
header("location:http://".$_SERVER['SERVER_NAME']."/uniodonto/arquivos?p=".$arquivo[$n-1]."&a=".$arquivo[$n]);



?>