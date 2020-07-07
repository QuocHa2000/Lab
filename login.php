 
<?php
    include ("header-login.php");
    include "controllers/login-submit.php";
?>
<head>
    <title>KienThuc-Đăng nhập</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container-fluid background">
        <!-- khối login -->
       <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-xs-12 row-container" >
                 <form  method="post" id="form-1">
                    <!-- thẻ div login -->
                     <div><h1>Đăng nhập</h1></div>
                     <!-- khối email -->
                     <?php
                        if (isset($_SESSION["sai"])) {
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo $_SESSION["sai"];
                            echo "</div>";
                            session_unset();
                            session_destroy();
                        }
                     ?>
                     <div class="form-group">
                        <label for="username">Tài khoản</label>  
                        <input type="text" class="form-control" name="username" id="username" placeholder="Nhập tài khoản" value="<?php echo $username; ?>" required>
                     </div>
                     <!-- khối password -->
                     <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu" value="<?php echo $password; ?>" required>
                     </div>
                     <div>
                        <input   type="checkbox" name="remember" id="remember" value="1"> <label for="remember" style="font-size:14px"> Nhớ mật khẩu </label>
                     </div>
                     <!-- khối nút login -->
                     <div>
                         <button type="submit" name="submit" class="btn btn-primary btn-block my-3">Đăng nhập</button>
                    </div>
                     <div>
                         <p class="p">Bạn chưa có tài khoản? <a class="a" href="register.php">Đăng ký</a></p>
                     </div>
                 </form>
            </div>
       </div>
    </div>
   
</body>
</html>