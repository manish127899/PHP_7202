<!-- 2.7 write a php code to use mysql date and time functions -->

<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("connection failed");
}

$sql = "SELECT
            HOUR(NOW()) AS hour,
            MINUTE(NOW()) AS minute,
            SECOND(NOW()) AS second,
            DATE_FORMAT(NOW(), '%d-%m-%Y %H:%i:%s') AS current_time";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo "hour : " . $row['hour'] . "<br>";
    echo "minute : " . $row['minute'] . "<br>";
    echo "second : " . $row['second'] . "<br>";
    echo "date and time : " . $row['current_time'];
}

mysqli_close($conn);
?>