<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";
$name=$_POST['name'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "Delete  FROM hero where hero_name='".$name."'";
$result = $conn->query($sql);
$sql2 = "SELECT hero_name, hero_hp, hero_mp FROM hero ";

$result2=$conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while ($row = $result2->fetch_assoc()) {
        echo "hero_name: " . $row["hero_name"] . " - Hero_hp: " . $row["hero_hp"] . "Hero_mp " . $row["hero_mp"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();