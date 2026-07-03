<?php
//2.2 Write a PHP code sorting an array entered by user

$n = (int) readline("enter the number of elements: ");

$arr = array();

for($i = 0; $i < $n; $i++)
{
    $arr[$i] = (int) readline("enter element " . ($i + 1) . ": ");
}

sort($arr);

echo "sorted array: ";

for($i = 0; $i < $n; $i++)
{
    echo $arr[$i] . " ";
}
?>