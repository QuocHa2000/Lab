<?php
$conn = mysqli_connect("localhost","root","","web");
mysqli_set_charset($conn,"utf8");
    if (isset($_POST['del'])){
        $delval = $_POST['del'];
        $sql = "DELETE FROM document WHERE document.MaMH='$delval';";
        $conn->query($sql);
        echo "<script>alert('Thanh Cong')</script>";
    }

    if (isset($_POST['tenmh'])&&(isset($_POST['mamh']))){
        $mamh =$_POST['mamh'];
        $tenmh = $_POST['tenmh'];
        $tieude = $_POST['tieude'];
        $noidung = $_POST['noidung'];
        $anh = $_POST['anh'];
        $ref = $_POST['ref'];

        $upsql = "UPDATE document SET TenMH='$tenmh',TieuDe='$tieude',NoiDung='$noidung',LinkAnh='$anh',LinkREF='$ref' 
        WHERE document.MaMH = '$mamh';";

        if($conn->query($upsql)){
            echo "Success";
        }else{
            echo "Fails";
        }
    }


