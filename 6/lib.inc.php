<html>
<head>
<title>Таблица умножения!</title>
</head>
<body>

<table border="1">
<?php
$rows=9;
$cols=9;
for($tr = 1; $tr <= $rows; $tr++){
echo "<tr>";
for($td = 1;$td <=$cols; $td++){
if($tr == 1 || $td == 1){
echo "<th style='background-color:yellow;font-weight:900'>", $tr * $td, "</th>";
}
else{
echo "<td>", $tr * $td, "</td>";
}
}
echo "</tr>";
}
?>
</table>

</body>
</html>