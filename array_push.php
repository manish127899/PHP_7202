<?php
// Q.4.Program to array_push

$colors = array("red", "green", "blue");

echo "original array:<br>";
print_r($colors);

array_push($colors, "yellow", "black");

echo "<br><br>Array After array_push():<br>";
print_r($colors);
?>