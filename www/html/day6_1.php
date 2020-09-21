<form action="day6_2.php" method="post">
    你的名稱 :
    <input type ="text" name="name">
    你的血量：
    <input type="number"  name="hp">
    你的魔力：
    <input type ="number" name="mp">
    你的id:
    <input type="number"  name="id">
    <input type ="submit" value="送出">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "請輸入文字";


$sql = "INSERT INTO hero ( hero_name, hero_hp,hero_mp)
VALUES ( 'kevin2', 502,1102)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
