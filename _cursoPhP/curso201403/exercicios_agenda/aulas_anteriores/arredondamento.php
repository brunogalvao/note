<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
echo $num = 98.676754323;
echo "<br />";
echo "<br />";


echo "number_format ";
echo number_format($num,2);

echo "<br />";




echo "round ";
echo round($num,2);
echo "<br />";



echo "print f";
printf( "%.2f", $num);
echo "<br />";


echo "ceil ";
echo ceil($num);
echo "<br />";



echo "floor";
echo floor($num);


echo "<br />";
echo gettype($num);

$num1=5;
echo "<br />";
echo gettype($num1);



?>

</body>
</html>