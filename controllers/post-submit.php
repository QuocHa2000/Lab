<?php
    require "config.php";
    session_start();
    if(isset($_POST["submit"]) && isset($_POST["tieude"]) && isset($_POST["noidung"]) && isset($_SESSION["login"]))
    {
        $tieude=$_POST["tieude"];
        $noidung=$_POST["noidung"];
        $nguoipost=$_SESSION["login"];
        $sql="INSERT INTO post (TieuDe, NoiDung, NguoiPost) VALUES ('$tieude', '$noidung', '$nguoipost')";
        mysqli_query($conn, $sql);
        echo "<script>alert('post thành công')</script>";
    }
    if(isset($_POST["submit"]) && isset($_POST["tieude"]) && isset($_POST["noidung"]) && isset($_SESSION["admin"]))
    {
        $tieude=$_POST["tieude"];
        $noidung=$_POST["noidung"];
        $nguoipost=$_SESSION["admin"];
        $sql="INSERT INTO post (TieuDe, NoiDung, NguoiPost) VALUES ('$tieude', '$noidung', '$nguoipost')";
        mysqli_query($conn, $sql);
        echo "<script>alert('post thành công')</script>";
    }
?>