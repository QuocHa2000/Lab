<?php
    
    session_start();
    include ("config.php");
    if (isset($_POST["submit"]) && $_POST["username"] !="" && $_POST["password"] !="") {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $password=md5($password);
        if (isset($_POST["remember"])) {
            setcookie("user", $_POST["username"]);
            setcookie("pass",$_POST["password"]);
        }
        $sql="SELECT * FROM account WHERE username='$username' AND password='$password'";
        $user = mysqli_query($conn, $sql);
        
        if(mysqli_fetch_row($user)>0){
            $_SESSION["login"] = $username;
            header("location:index.php");
        }
        else
        {
            $sql_admin="SELECT * FROM admin WHERE Username_ad='$username' AND Password_ad='$password'";
            $admin = mysqli_query($conn, $sql_admin);
        
            if(mysqli_fetch_row($admin)>0){
                $_SESSION["admin"] = $username;
                header("location:index.php");
            }
            else
            {
                $_SESSION["thongbao"] = "Sai tài khoản hoặc mật khẩu";
            }
        }
        
       
       
    }else{
        
        // header("location:login.php");
        
    };

    $username="";
    $password="";
    $check=false;
    
    if(isset($_COOKIE["user"]) && isset($_COOKIE["pass"]))
    {
        $username=$_COOKIE["user"];
        $password=$_COOKIE["pass"];
        $check=true;
    }
    
?>
