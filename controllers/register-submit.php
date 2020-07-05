<?php
    session_start();
    include ("config.php");
    if(isset($_POST['submit']) && $_POST['username']!='' && $_POST["password"]!='' && $_POST["repassword"]!='')
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $email= $_POST["email"];
        if($password!=$repassword)  
        {
            $_SESSION["thongbao"] = "nhap lai password sai kìa thằng ngu";
            header("location:../register.php");
            die();
        }
        $sql="SELECT * FROM account WHERE username='$username'";
        $old= mysqli_query($conn, $sql);
        $password= md5($password);
        if (mysqli_num_rows($old)>0) {
            $_SESSION["thongbao"] = "tai khoan da co nguoi dung roi thang ngu";
            header("location:../register.php");
        }else{  
        $sql = "INSERT INTO account (username, password, email) VALUES ('$username','$password','$email')";
        mysqli_query($conn, $sql);
        $_SESSION["thongbao"] = "dang ki thanh cong";
        header("location:../login.php");
        }
    }
    else
        {
            $_SESSION["thongbao"] = "điền đủ thông tin cho tao";
            header("location:../register.php");
        }
