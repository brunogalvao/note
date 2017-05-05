<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
# echo $user_agent;

$posi = strpos($user_agent, 'iPhone');
if ($posi > 0)
{
	$redirect = "http://localhost/pag_movel.html";
}
else
{
	$redirect = "http://localhost/pag_normal.html";
}

header("location;$redirect");
exit;

?>
</body>
</html>