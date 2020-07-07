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
            $_SESSION["thongbao"] = "Nhập lại mật khẩu không trùng khớp";
            header("location:../register.php");
            die();
        }
        $sql="SELECT * FROM account WHERE username='$username'";
        $old= mysqli_query($conn, $sql);
        $password= md5($password);
        if (mysqli_num_rows($old)>0) {
            $_SESSION["thongbao"] = "Tài khoản đã tồn tại";
            header("location:../register.php");
        }else{  
        $sql = "INSERT INTO account (username, password, email) VALUES ('$username','$password','$email')";
        mysqli_query($conn, $sql);
        $_SESSION["thongbao"] = "Đắng ký thành công";
        header("location:../login.php");
        }
    }
    
