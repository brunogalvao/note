<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template AJAX</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/ajaxpost.js"></script>
</head>
<body>
    
    <div class="jumbotron"><div class="container"><h3>Bruno Galvao</h3></div></div>
    
    <div class="col-md-10 col-md-10 col-md-offset-1">
    
        <nav>
            <li id="home">home</li>
            <li id="promo">promoção</li>
            <li id="contato">contato</li>
            <li id="adm">adm</li>
        </nav>

        <div class="parte home">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active"><img src="la.jpg" alt="Los Angeles"></div>
                <div class="item"><img src="chicago.jpg" alt="Chicago"></div>
                <div class="item"><img src="ny.jpg" alt="New york"></div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

            <div class="destaque">

                <div>01</div>
                <div>02</div>
                <div>03</div>

            </div>

            <div class="texto">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius natus pariatur rem dolores suscipit nesciunt, maxime molestias omnis consequatur necessitatibus, minima, porro saepe atque, illo ipsam eum. Repellendus, sequi, impedit!
            </div>

        </div>
        
        <div class="parte promo">
        
            <h2>Promoção</h2>

            <div id="mostra_promo"></div>
            <div id="delete"></div>
        
        </div>
        <div class="parte contato">Contato</div>
    
    </div>
    
</body>
</html>