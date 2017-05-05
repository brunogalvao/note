<?php


$user_agent =  $_SERVER['HTTP_USER_AGENT'];

#echo $user_agent;


$posS = strpos($user_agent, 'Symbian');
$posi = strpos($user_agent, 'iPhone');
$posN = strpos($user_agent, 'N97');


if (($posS>0)||($posi>0)||($posN>0))
{
  $redirect = "http://localhost/300413/movel/pag_movel.html";
}
else
{
  $redirect = "http://localhost/300413/movel/pag_normal.html";
}

header("location:$redirect");
exit; 

?>
