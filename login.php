<?php
    include "header.php";
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
                 <form action="controllers/login-submit.php" method="post">
                    <!-- thẻ div login -->
                     <div><h1>Login</h1></div>
                     <!-- khối email -->
                     <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your username">
                     </div>
                     <!-- khối password -->
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                     </div>
                     <!-- khối nút login -->
                     <div>
                         <button type="submit" name="submit" class="btn btn-primary btn-block my-3">Login</button>
                     </div>
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