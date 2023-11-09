<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
while ($row = $result->fetch_assoc()) {
    echo $row["fname"] . " " . $row["lname"];
    echo "<br/>";
}
?>