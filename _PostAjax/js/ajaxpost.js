$(document).ready(function() {
    
    $('.parte').hide();
    $('.home').show();
    
    //menu
    $(' nav > li ').click(function(){
        
        $('.parte').fadeOut();
        
        var bt = $(this).attr('id');
        
        $(' nav > li ').removeClass(' select ');
        $(this).addClass('select');
        
        if( bt == bt ){
                        
            $('.'+bt).fadeIn();
            
        }if( bt == 'adm' ){
            window.location.replace('_assent/_adm/adm.php');
        }
    });
    
	$(" #enviar ").click(function() {
        
		var preco = $(" #preco ");
		var precoPost = preco.val(); 
		var descricao = $(" #descricao ");
		var descricaoPost = descricao.val(); 
		var img = $(" #img ");
		var imgPost = img.val();
        
        $.post("../../_con/enviar.php", {preco: precoPost, descricao: descricaoPost, img: imgPost},
		
            function(data){
                $(" #resposta ").html(data);
            }
		);
         
        $(" #tabela-preco ").each(function(){
            this.reset();
        });
        
	});
    
    $(' #mostra_post ').empty(); //Limpando a tabela
	$.ajax({
		type:'post',              //Definimos o método HTTP usado
		dataType: 'json',         //Definimos o tipo de retorno
        pageEncoding: "utf-8",
        cache: false,
        processData: false,
		url: '../../_con/getDados.php', //Definindo o arquivo onde serão buscados os dados
		success: function( dados ){
			for( var i=0;dados.length > i; i++ ){
                //Adicionando registros retornados na tabela
                $(' #mostra_post ').append('<section id='+dados[i].id_promo+'><h3>'+dados[i].preco+'</h3><h4>'+dados[i].descricao+'</h4><p>'+dados[i].img+'</p><a class="btn btn-danger" href="../../_con/delete.php?id='+dados[i].id_promo+'"><i id="deletar" class="material-icons">delete</i></a></section>');
			}
		}
	});
    
    $(" #mostra_promo ").empty(); //Limpando a tabela
	$.ajax({
        type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno   
        pageEncoding:"utf-8",
        cache: false,
        processData: false,
		url: '_con/getDadosPromo.php',//Definindo o arquivo onde serão buscados os dados
        success: function( dados ){
			for( var i=0;dados.length > i; i++ ){
                //Adicionando registros retornados na tabela
                $(' #mostra_promo ').append('<section class="col-md-4" id='+dados[i].id_promo+'><h3>'+dados[i].preco+'</h3><h4>'+dados[i].descricao+'</h4><p>'+dados[i].img+'</p></section>');
			}
		}
	});
    
    //ADM
    $(" #enviar-post ").hide();
    $(" #mostrar-post ").hide();
    
    $(' .bt-Showpost > div > input ').click(function(){
        
        var btShow = $(this).attr('id'),
            mostrar = btShow.replace('bt-','');
        
        $(" #enviar-post ").fadeOut();
        $(" #mostrar-post ").fadeOut();
        
        if( mostrar == mostrar ){
           
            var mostarSelect = "#" + mostrar + "-post";
            window.setTimeout("location.reolad()", 6000);
            $( mostarSelect ).fadeIn();
            
        }
        
    });
    
    $(' .sair ').click(function(){
        window.location.replace('../../');
    });
    
    $(" #deletar ").click(function(){
        
        var id = $(this).attr('id');
        
        alert(id);
        
    });
    
});