<!DOCTYPE html>
<html>
<head>
    <title>calculator</title>
</head>
<body>

<!-- 2.5 Write a PHP code for user define function for calculator -->

<form method="post">
    first number :
    <input type="number" name="num1"><br><br>

    second number :
    <input type="number" name="num2"><br><br>

    operation :
    <select name="operation">
        <option value="+">addition</option>
        <option value="-">subtraction</option>
        <option value="*">multiplication</option>
        <option value="/">division</option>
    </select><br><br>

    <input type="submit" name="submit" value="calculate">
</form>

<?php

function calculator($num1, $num2, $operation)
{
    if ($operation == "+")
        return $num1 + $num2;

    if ($operation == "-")
        return $num1 - $num2;

    if ($operation == "*")
        return $num1 * $num2;

    if ($operation == "/")
        return $num1 / $num2;
}

if (isset($_POST['submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    echo "<h3>result = " . calculator($num1, $num2, $operation) . "</h3>";
}

?>

</body>
</html>