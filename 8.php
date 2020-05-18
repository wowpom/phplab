<html>
<head>
</head>
<body>
<?php
date_default_timezone_set('Asia/Novosibirsk'); 
$date = isset($_COOKIE['data']) ? date(" Y:m:d H-i-s",$_COOKIE['data']):"вы тут в первый раз" ;
Setcookie("data",time(),time()+3600*24*365);
echo 'Последний раз вы тут были:'.$date;

?>
</body>
</html>