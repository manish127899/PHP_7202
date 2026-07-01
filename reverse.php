<?php
// Q1.8 Write a PHP Program to reverse an array values entered by user

$arr = array();

if(isset($_POST['submit']))
{
    $arr = explode(",", $_POST['arr']);
    $rev = array_reverse($arr);
}
?>

<form method="post">
    Enter values (comma separated): <br>
    <input type="text" name="arr" required>
    <input type="submit" name="submit" value="Reverse">
</form>

<?php
if(isset($_POST['submit']))
{
    echo "Original Array: ";
    print_r($arr);

    echo "<br>Reversed Array: ";
    print_r($rev);
}
?>