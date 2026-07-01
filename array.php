<?php

// Q2.1 : Create numeric, associative and multidimensional arrays

$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h3>Days</h3>";
foreach ($days as $d)
{
    echo $d . "<br>";
}

// Associative array
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h3>Months</h3>";
foreach ($months as $month => $days)
{
    echo $month . " = " . $days . "<br>";
}

// Multidimensional array
$laptop = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 60000
    )
);

echo "<h3>Laptops</h3>";
foreach ($laptop as $company => $data)
{
    echo "Company: " . $company . "<br>";
    echo "Model: " . $data["Model"] . "<br>";
    echo "Price: ₹" . $data["Price"] . "<br><br>";
}

?>