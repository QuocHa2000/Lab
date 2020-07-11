<?php 
    $conn = mysqli_connect("localhost","root","","web");
    mysqli_set_charset($conn,"utf8");
    if(isset($_POST['ma'])&& isset($_POST['ten'])){
        $mamh = $_POST['ma'];
        $tenmh = $_POST['ten'];
        $phan1 = $_POST['phan1'];
        $phan2 = $_POST['phan2'];
        $phan3 = $_POST['phan3'];
        $phan4 = $_POST['phan4'];
        $malv = $_POST['malv'];
        $sql = "INSERT INTO document (MaMH,TenMH,Phan1,Phan2,Phan3,Phan4,MaLevel) VALUES ('$mamh','$tenmh','$phan1','$phan2','$phan3','$phan4','$malv');";

        $conn->query($sql);
    };
?>