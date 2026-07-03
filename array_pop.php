<?php
//Q.3 Program to  array_pop

$colors = array("red", "green", "blue", "yellow");

echo "original array:<br>";
print_r($colors);

array_pop($colors);

echo "<br><br>Array After array_pop():<br>";
print_r($colors);
?>