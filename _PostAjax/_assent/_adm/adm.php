<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post AJAX</title>
    <link rel="stylesheet" href="../../css/estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script charset="utf-8" src="../../js/ajaxpost.js"></script>
</head>
<body>
    
    <div class="col-md-10 col-md-offset-1">
     
    <div class="jumbotron">
        <div class="container"><h3>Administrativa</h3></div>
    </div>
      
    <div class="sair"><i class="material-icons">close</i></div>
       
        <div class="bt-Showpost">
            <div>
                <h2>Postar</h2>
                <input type="button" class="btn btn-primary" value="postar" id="bt-enviar">
            </div>
            
            <div>
                <h2>Mostar Post's</h2>
                <input type="button" class="btn btn-primary" value="mostrar post" id="bt-mostrar">
            </div>
        </div>
        
        <div id="enviar-post">
            <!-- Add Post's -->
            <div class="bg-primary titulo-adm">Post</div>

            <form action="#" method="post" id="tabela-preco">

                <label>Preco: <input class="form-control" type="text" name="preco" id="preco" /></label><br>
                <label>Img: <input class="form-control" type="text" name="img" id="img" /></label><br>
                <label>Descrição: <textarea class="form-control" wrap="off" name="descricao" id="descricao" cols="30" rows="10"></textarea></label><br>
                <input class="btn btn-primary" type="button" value="Enviar" id="enviar" />

            </form>

            <div id="resposta" class="resposta"></div>
        </div>
        
        <div id="mostrar-post">
            <!-- Mostrar os Post's -->
            <div class="bg-primary titulo-adm">Mostrar Post's</div>

            <div id="mostra_post"></div>
            <div id="mostra_post"></div>
        </div>
        
    </div>
    
</body>
</html>
