<html>
<head>
<title>Лабораторная работа 5</title>
</head>
<body>
<?php 
$now = time(); //время по Гринвичу
$now += 7 * 3600; //определяем Новосибирское время
$H = date("H", $now);
$i = date("i", $now);
$tiime = " час ";
$i1 = $i % 10;

if ($H == 1 || $H == 21) {
	$tiime;
}
elseif (($H >= 2 && $H <= 4) || $H == 22 || $H == 23 ) {
	$tiime = " часа ";
} else {$tiime = " часов ";}

$minute = " минута ";

if ($i == 1 || $i == 21 || $i == 31 || $i == 41 || $i == 51) {
	$minute;
}
elseif ($i1 >= 2 && $i1 <= 4) {
	$minute = " минуты ";
} else $minute= " минут ";

echo 'Сейчас '. $H . $tiime . $i . $minute . '!';
?>
</body>
</html>