 <?php
    include "header-login.php";
    session_start();
    session_destroy();
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
<head>
    <title>KienThuc-Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container-fluid background">
        <!-- khối login -->
       <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 col-xs-12 row-container" >
                 <form action="controllers/login-submit.php" method="post" id="form-1">
                    <!-- thẻ div login -->
                     <div><h1>Login</h1></div>
                     <!-- khối email -->
                     <?php
                        if (isset($_SESSION["sai"])) {
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo $_SESSION["sai"];
                            echo "</div>";
                            session_unset();
                        }
                     ?>
                     <div class="form-group">
                        <label for="username">Username</label>  
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" value="<?php echo $username; ?>" required>
                     </div>
                     <!-- khối password -->
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" value="<?php echo $password; ?>" required>
                     </div>
                     <div>
                        <input   type="checkbox" name="remember" id="remember" value="1"> <label for="remember" style="font-size:14px"> Remember me </label>
                     </div>
                     <!-- khối nút login -->
                     <div>
                         <button type="submit" name="submit" class="btn btn-primary btn-block my-3">Login</button>
                     </>
                         <h6>Or</h6>
                    <!-- khối đăng nhập bằng facebook -->
                     <div>
                        <button type="submit" class="btn btn-primary active btn-block my-3"><i class="fab fa-facebook-square"></i> Login with Facebook</button>
                     </div>
                     <!-- khối chưa có tài khoản và quên mật khẩu -->
                     <div>
                         <p class="p">Do not have an account? <a class="a" href="register.php">Register</a></p>
                     </div>
                     <div>
                         <p class="p" style="margin-top: -10px;"><a class="a" href="">Forgot password</a></p>
                     </div>
                 </form>
            </div>
       </div>
    </div>
   
</body>
</html>