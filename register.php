<?php
include "header-login.php";
session_start();
session_destroy();
?>

<head>
    <title>KienThuc-Register</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container-fluid background">
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 col-xs-12 row-container1">
                <form action="controllers/register-submit.php" method="POST">
                    <!-- thẻ div register account -->
                    <div>
                        <h1>Register Account</h1>
                    </div>
                    <?php
                        if(isset($_SESSION["thongbao"]))
                        {
                            echo $_SESSION["thongbao"];
                            session_unset();
                        }
                    ?>
                    <div class="form-group">
                        <label class="label" for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Your username" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="repassword">Confirm Password</label>
                        <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter email" required>
                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block my-3">Register</button>
                    </div>
                    <h6>Or</h6>
                    <div>
                        <button type="submit" class="btn btn-primary active btn-block my-3"><i class="fab fa-facebook-square"></i> Login with Facebook</button>
                    </div>
                    <div>
                        <p class="p">Do you have an account <a class="a" href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/validator.js"></script>
</body>

</html>