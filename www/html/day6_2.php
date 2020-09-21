<?php
$name = $_POST['name'];
$hp=$_POST['hp'];
//$hp_int=int($hp);
$mp=$_POST['mp'];
//$mp_int=int($mp);
$id=$_POST['id'];
//$id_int=int(id);
echo "你輸入的資料是姓名： $name<br>";
echo "你輸入的資料是hp: $hp<br>";
echo "你輸入的資料是mp: $mp<br>";
echo "你輸入的資料是id: $id<br>";



$int_hp=intval($hp);
$int_mp=intval($mp);
$int_id=intval($id);
echo gettype($int_hp);
echo gettype($int_mp);
echo gettype($int_id);
echo gettype($name);



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
VALUES ('".$name."',".$int_hp.",".$int_mp.")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
