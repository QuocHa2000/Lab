<?php
$conn = mysqli_connect("localhost","root","","web");
mysqli_set_charset($conn,"utf8");
    if (isset($_POST['del'])){
        $delval = $_POST['del'];
        $sql = "DELETE FROM document WHERE document.MaMH='$delval';";
        $conn->query($sql);
        echo "<script>alert('Thanh Cong')</script>";
    }

    if (isset($_POST['title'])){
        $mamh =$_POST['mamh'];
        $tenmh = $_POST['tenmh'];
        $phan1 = $_POST['phan1'];
        $phan2 = $_POST['phan2'];
        $phan3 = $_POST['phan3'];
        $phan4 = $_POST['phan4'];

        $upsql = "UPDATE document SET TenMH='$tenmh',Phan1='$basic',Phan2='$intermediate1',Phan3='$intermediate2',Phan4=$advance 
        WHERE document.mamh = '$mamh';";

        if($conn->query($upsql)){
            echo "Success";
        }else{
            echo "Fails";
        }
    }


