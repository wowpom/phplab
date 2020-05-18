<html>
<head>
<title>Навигационное меню!</title>
</head>
<body>
<?php
$menu = array(
        'Home' => 'home.php',
        'About' => 'about.php',
        'Index' => 'index.php',
		'Count' => 'count.php',
		'Page' => 'page.php'
);
 
foreach($menu as $key => $value){
    echo "<a href=" . $value .">" . $key . " <br> </a> ";
}
?>
</body>
</html>