<?php 
    $conn = mysqli_connect("localhost","root","","web");
    if(isset($_POST['mamh'])&& isset($_POST['phan1'])){
        $mamh = $_POST['mamh'];
        $phan1 = $_POST['phan1'];
        $phan2 = $_POST['phan2'];
        $phan3 = $_POST['phan3'];
        $phan4 = $_POST['phan4'];
        $malv = $_POST['malv'];
        $sql = "INSERT INTO document (mamh,phan1,phan2,phan3,phan4,malevel) VALUES ('$mamh','$phan1','$phan2','$phan3','$phan4','$malv');";

        $conn->query($sql);
    }else{
        echo "Fail";
    };
?>