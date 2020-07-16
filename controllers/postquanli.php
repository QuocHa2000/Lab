<?php 
    $conn = mysqli_connect("localhost","root","","web1");
    mysqli_set_charset($conn,"utf8");
    if(isset($_POST['ma'])&& isset($_POST['ten'])){
        $mamh = $_POST['ma'];
        $tenmh = $_POST['ten'];
        $tieude = $_POST['tieude'];
        $noidung = $_POST['noidung'];
        $anh = $_POST['anh'];
        $ref = $_POST['ref'];
        $sql = "INSERT INTO document (MaMH,TenMH,TieuDe,NoiDung,LinkAnh,LinkREF) VALUES ('$mamh','$tenmh','$tieude','$noidung','$anh','$ref');";

        $conn->query($sql);
        echo "<script>alert('Thêm nội dung thành công')</script>";
    };
?>