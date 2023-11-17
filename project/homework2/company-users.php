<?php
$servername = "db272.cv99a47vgyml.us-west-1.rds.amazonaws.com";
$username = "admin";
$password = "password";
$dbname = "cmpe272";
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
while ($row = $result->fetch_assoc()) {
    echo $row["fname"] . " " . $row["lname"];
    echo "<br/>";
}
?>