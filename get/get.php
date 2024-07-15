<div class= "titulo"> GET </div>

<?php 

$C = $_GET['C'];

$F = ($C * 9/5) + 32;

echo "A temperatura em Fahrenheit é $F";

$F = $_GET ['F'];
$C = ($F - 32) *5/9;

echo "<br>A temperatura em Celsius é $C"
?>