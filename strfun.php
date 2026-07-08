<?php

// 2.4 Write a program that demonstrates the use of the following string functions.

// string variable
$student_name = "manish kushwaha learning php";

// 1) strlen() // any string
echo "1) string length = ";
echo strlen($student_name);
echo "<br><br>";

// 2) strpos() //find some specific word,letter
echo "2) position of 'kushwaha' = ";
echo strpos($student_name, "kushwaha");
echo "<br><br>";

// 3) str_word_count()
echo "3) total words = ";
echo str_word_count($student_name);
echo "<br><br>";

// 4) strrev()
echo "4) reverse string = ";
echo strrev($student_name);
echo "<br><br>";

// 5) strtolower()
echo "5) lowercase = ";
echo strtolower($student_name);
echo "<br><br>";

// 6) strtoupper()
echo "6) uppercase = ";
echo strtoupper($student_name);

?>