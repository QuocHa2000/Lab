<?php 
    $conn = mysqli_connect("localhost","root","","web");
    mysqli_set_charset($conn,"utf8");
    $mabaipost=''; 
    if(isset($_GET['mabaipost'])){
        $mabaipost = $_GET['mabaipost'];
        $getsql = "SELECT * FROM post WHERE post.PostId= '$mabaipost' ; ";

        $result = $conn->query($getsql);
        if($result->num_rows>0){
            $GLOBALS['row'] = $result->fetch_assoc();
        }

        $postsql = "SELECT * FROM postdetail WHERE postdetail.PostId='$mabaipost';";
        $GLOBALS['result1'] = $conn->query($postsql);
    }


    if(isset($_POST['name']) && isset($_POST['content'])){
        if(!isset($_SESSION)){
            header("location:./login");
        }
        $rep = $_POST['name'];
        $content = $_POST['content'];
        $sql = "INSERT INTO postdetail (PostId,TenNguoiRep,NoiDungCmt) VALUES ('$mabaipost','$rep','$content');";

        $result = $conn->query($sql);
        echo "<script> alert('Dang binh luan thanh cong') </script>";
        header("Refresh:0");
    }

