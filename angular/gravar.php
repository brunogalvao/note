<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gravar PhP</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="js/ajax.js"></script>
</head>
<body>

<div class="container">

    <h2>Gravar Promoção</h2>

    <div class="logo"><img src="img/logo_pplware.png" alt="Peopleware" title="Peopleware"/></div>

    <div class="gravar">
        <div class="inputgravar">

          <div class="tituloinput">Preencha o seguinte formulário:</div><br />

          <input type="text" id="preco" name="preco" placeholder="Preco" /><br /><br />
          <input type="text" id="descricao" name="descricao" placeholder="Descricao" /><br /><br />
          <input type="text" id="img" name="img" placeholder="img" /><br /><br />

        </div>
        <div class="submitgravar">
         <button class="btn btn-success" type="submit" onclick="inserir_registo()">Gravar</button>
        </div>
    </div>

</div>

</body>
</html>