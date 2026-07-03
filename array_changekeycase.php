<?php
//2.3.Q1.Program to change array keys into uppercase and lowercase

$student = array(
    "name" => "manish",
    "city" => "rajkot",
    "course" => "BCA"
);

echo "original array:<br>";
print_r($student);

echo "<br><br>Keys in Lower Case:<br>";
print_r(array_change_key_case($student, CASE_LOWER));

echo "<br><br>Keys in Upper Case:<br>";
print_r(array_change_key_case($student, CASE_UPPER));
?>