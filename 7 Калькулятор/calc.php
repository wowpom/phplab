<html>
<head>
<title>Калькулятор</title>
</head>
<body>
<?php
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$expression = $x1. ' '. $_GET['operation'] . ' ' . $x2 . ' = ';

if($_GET['x1'] == '' || $_GET['x2'] == '') //ввел ли позьзователь данные
{       
	return 'Введите значения!';
}
elseif($x2 == 0 && $_GET['operation'] == '/' )    //проверка деление на ноль
{  
	return 'На ноль делить нельзя!';
} 
elseif (!(is_numeric($_GET['x1'])) || !(is_numeric($_GET['x2']))) //проверка ввел ли пользователь число
{
	return 'Вы ввели не число!!';

} 

switch($_GET['operation']){
	case '+':
	$result = $x1 + $x2;
	break;
	case '-':
	$result = $x1 - $x2;
	break;
	case '*':
	$result = $x1 * $x2;
	break;
	case '/':
	$result = $x1 / $x2;
	break;
	default:
	return 'Операция не поддерживаеться';
}
return $expression . $result;
?>
</body>
</html>