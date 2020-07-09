<?php
include "header-login.php";
session_start();
session_destroy();
?>

<head>
    <title>KienThuc-Đăng ký</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container-fluid background">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-xs-12 row-container1">
                <form action="controllers/register-submit.php" method="POST">
                    <!-- thẻ div register account -->
                    <div>
                        <h1>Đăng ký thành viên</h1>
                    </div>
                    <?php
                        if(isset($_SESSION["thongbao"]))
                        {
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo $_SESSION["thongbao"];
                            echo "</div>";
                            session_unset();
                        }
                    ?>
                    <div class="form-group">
                        <label class="label" for="username">Tài khoản</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Nhập tài khoản" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="password">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="repassword">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Nhập email" required>
                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block my-3">Đăng ký</button>
                    </div>
                    <div>
                        <p class="p">Đã có tài khoản? <a class="a" href="login.php">Đăng nhập</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/validator.js"></script>
</body>

</html>