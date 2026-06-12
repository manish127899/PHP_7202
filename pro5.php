<?php
// 1.5 Write a PHP program to print 5 to 10 using For and For Each.

for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br>";

$numbers = [5, 6, 7, 8, 9, 10];

foreach ($numbers as $num) {
    echo $num . " ";
}
?>