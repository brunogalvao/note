<?

$con = @mysql_connect("localhost", "root", "") or die("Não foi possivel conectar");
mysql_select_db("cadastro",$con) or die ("Não conectou ao banco!!!");

?>