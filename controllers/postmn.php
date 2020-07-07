<?php
$conn = mysqli_connect("localhost","root","","web");
mysqli_set_charset($conn,"utf8");
    if (isset($_POST['del'])){
        $delval = $_POST['del'];
        $sql = "DELETE FROM document WHERE document.mamh='$delval';";
        $conn->query($sql);
        echo "<script>alert('Thanh Cong')</script>";
    }

    if (isset($_POST['title'])){
        $mamh =$_POST['mamh'];
        $title = $_POST['title'];
        $basic = $_POST['basic'];
        $intermediate1 = $_POST['intermediate1'];
        $intermediate2 = $_POST['intermediate2'];
        $advance = $_POST['advance'];

        $upsql = "UPDATE document SET tieude='$title',coban='$basic',trungbinh1='$intermediate1',trungbinh2='$intermediate2',nangcao=$advance 
        WHERE document.mamh = '$mamh';";

        if($conn->query($upsql)){
            echo "Success";
        }else{
            echo "Fails";
        }
    }


