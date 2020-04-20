<html>
<head>
<title>lab3</title>
</head>
<body>
<?php 
$a = 2;
switch($a){
case 1:
case 2:
case 3:
case 4:
case 5:
echo "Это рабочий день";
break;
case 6:
case 7:
echo "Это выходной!";
break;
default:
echo "Error!";
break;
}
?>
</body>
</html>