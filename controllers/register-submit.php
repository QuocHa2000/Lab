<?php
    include ("config.php");
    if(isset($_POST['submit']) && $_POST['username']!='' && $_POST["password"]!='' && $_POST["repassword"]!='')
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $email= $_POST["email"];
        if($password!=$repassword)
        {
            header("location:register.php");
        }
        $sql="SELECT * FROM account WHERE username='$username'";
        $old= mysqli_query($conn, $sql);
        $password= md5($password);
        if (mysqli_num_rows($old)>0) {
            header("location:register.php");
        }
        $sql = "INSERT INTO account (username, password, email) VALUES ('$username','$password','$email')";
        mysqli_query($conn, $sql);
        echo "Successfully!";
    }
    else
        {
            header("location:register.php");
        }
