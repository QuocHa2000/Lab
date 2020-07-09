<?php
$conn = mysqli_connect("localhost:3308", "root", "", "web");
mysqli_set_charset($conn, "utf8");

$mon= $_POST['code'];
$level = $_POST['level'];
$part = $_POST['part'];
$sql= "SELECT * FROM document WHERE document.mamh= '$mon' AND document.malevel='level';";
$result= $conn->query($sql);
echo $result['"$part"'];


?>