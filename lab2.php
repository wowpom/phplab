<html>
<head>
<title>lab2</title>
</head>
<body>
<?php 
define("SIGN","<br> С уважением, Василий!");
$names = array("Иван Иванович","Анна Сергеевна","Борис Борисович");
$events = array(
"doors" => "день открытых дверей",
"vistavka" => "выставку",
"game" => "игру",
);
$x = 1;
$str = "Уважаемый(ая), $names[2]! <br>";
$str2 = "Приглашаем Вас на ". $events['game']. "!<br>";
$str3 = "Дата события ". $x ." мая.";
echo $str . $str2. $str3. (SIGN);

?>
</body>
</html>