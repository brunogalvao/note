<?php
    require_once "../_asent/conect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página Administrativa</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
  
   <div class="container">
       
       <h1>Página Administrativa</h1>
       
       <nav>
           <li>postar</li>
           <li>ver post</li>
       </nav>
       
       <div class="criar-post" id="criar-post">
           
            <form action="?go=cadastrar" method="post">

                <div class="form-group">
                    <label for="preco">Preco</label>
                    <input type="text" class="form-control" id="preco" placeholder="preco">
                </div>

                <div class="form-group">
                    <label for="descricao">Descricao</label>
                    <input type="text" class="form-control" id="descricao" placeholder="descricao">
                </div>
                
                <div class="form-group">
                    <label for="img">IMG</label>
                    <input type="text" class="form-control" id="img" placeholder="img">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>

            </form>
           
       </div>
       
   </div>
    
</body>
</html>


<?php

if(@$_GET['go'] == 'cadastrar'){
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $img = $_POST['img'];
    
    mysql_query("insert into promo (preco, descricao, img) values ('$preco','$descricao','$img')");
    header("location: ./");
}

?>