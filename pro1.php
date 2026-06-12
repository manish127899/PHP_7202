<?php
//Q1.1.1 Write a PHP program for print Previous semester Result using variables & constants in PHP.

define("COLLEGE", "Marwadi University");

$name = "Manish Kumar";
$rollNo = 7202;
$semester = "5th";
$result = "Pass";
$percentage = 82.50;

echo "<h2>Previous Semester Result</h2>";
echo "College Name : " . COLLEGE . "<br>";
echo "Student Name : " . $name . "<br>";
echo "Roll No : " . $rollNo . "<br>";
echo "Semester : " . $semester . "<br>";
echo "Result : " . $result . "<br>";
echo "Percentage : " . $percentage . "%";
?>
