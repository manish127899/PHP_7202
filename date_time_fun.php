<!-- 2.6 write a php code to use mysql date and time functions -->

<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (mysqli_connect_errno()) {
    die("database connection failed");
}

$sql = "SELECT
        DAYOFWEEK(CURDATE()) AS dayofweek,
        WEEKDAY(CURDATE()) AS weekday,
        DAYOFMONTH(CURDATE()) AS dayofmonth,
        DAYOFYEAR(CURDATE()) AS dayofyear,
        DAYNAME(CURDATE()) AS dayname";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {

    echo "dayofweek : " . $row["dayofweek"] . "<br>";
    echo "weekday : " . $row["weekday"] . "<br>";
    echo "dayofmonth : " . $row["dayofmonth"] . "<br>";
    echo "dayofyear : " . $row["dayofyear"] . "<br>";
    echo "dayname : " . $row["dayname"];
}

mysqli_close($conn);

?>