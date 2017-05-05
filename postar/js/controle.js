$(document).ready(function(){
    
    $(' nav > li ').click(function(){
        
        var bot = $(this).html();
        
        if( bot == 'adm' ){
            
            window.location.replace("adm/index-adm.php");
            
        }
        
    });
    
});