$(document).ready(function(){
    
	$(' .post ').empty(); //Limpando a tabela
    
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../_conect/conect.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$(' .post ').append('<tr><td>'+dados[i].nome+'</td><td>'+dados[i].email+'</td><td>'+dados[i].usuario+'</td><td>'+dados[i].senha+'</td></tr>');
			}
		}
	});
    
    /*
    $(' #mostra_post ').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../conect/getDadosPost.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
                //Adicionando registros retornados na tabela
                $(' #mostra_post ').append('<section id='+dados[i].id_txt+'><h3>'+dados[i].titulo+'</h3><h4>'+dados[i].autor+'</h4><p>'+dados[i].texto+'</p></section>');
			}
		}
	});*/
    
});

function inserir_registo()
{
 
    //dados a enviar, vai buscar os valores dos campos que queremos enviar para a BD
    var dadosajax = {
        'preco' : $(" #preco ").val(),
        'descricao' : $(" #descricao ").val(),
        'img' : $(" #img ").val()
    };
    pageurl = '../_conect/inserir.php';
    //para consultar mais opcoes possiveis numa chamada ajax
    //http://api.jquery.com/jQuery.ajax/
    $.ajax({
 
        //url da pagina
        url: pageurl,
        //parametros a passar
        data: dadosajax,
        //tipo: POST ou GET
        type: 'POST',
        //cache
        cache: false,
        //se ocorrer um erro na chamada ajax, retorna este alerta
        //possiveis erros: pagina nao existe, erro de codigo na pagina, falha de comunicacao/internet, etc etc etc
        error: function(){
            alert('Erro: Inserir Registo!!');
        },
        //retorna o resultado da pagina para onde enviamos os dados
        success: function(result)
        { 
            //se foi inserido com sucesso
            if($.trim(result) == '1')
            {
				alert("O seu registo foi inserido com sucesso!");
            }
            //se foi um erro
            else
            {
                alert("Ocorreu um erro ao inserir o seu registo!");
            }
 
        }
    });
}