<?php
// Q2.Program to  array_count_values

$arr = array("apple", "mango", "apple", "orange", "mango", "apple");

echo "original array:<br>";
print_r($arr);

echo "<br><br>Count of Values:<br>";
print_r(array_count_values($arr));
?>