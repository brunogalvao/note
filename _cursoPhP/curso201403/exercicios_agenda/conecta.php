<?

$host="localhost";
// digite aqui o host/servidor para seu acesso 

$user="root"; 
// digite aqui o nome de usuário para acesso 

$pass=""; 
// digite aqui a senha para o acesso ao banco

$conexao=mysql_connect($host,$user,$pass);

$database="cadastro";
// digite aqui o nome da base de dados 

$db=mysql_select_db($database) or die (mysql_error());
//conectando ao meu banco de dados 



?>