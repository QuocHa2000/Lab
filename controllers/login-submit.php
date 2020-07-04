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
        else{}
        $sql="SELECT * FROM account WHERE username='$username' AND password='$password'";
        $user = mysqli_query($conn, $sql);
        
        if(mysqli_fetch_row($user)>0){
            $_SESSION["login"] = $username;
            header("location:home.php");
        }
        else
        {
            $_SESSION["sai"] = "Username or password is wrong";
        }
        $username="";
        $password="";
        $check=false;
    
        if(isset($_COOKIE["user"]) && isset($_COOKIE["pass"]))
        {
            $username=$_COOKIE["user"];
            $password=$_COOKIE["pass"];
            $check=true;
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
