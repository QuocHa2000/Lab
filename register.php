<?php
include "header.php";
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
                    <div class="form-group">
                        <label class="label" for="name">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Your username">
                    </div>
                    <div class="form-group">
                        <label class="label" for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label class="label" for="repassword">Confirm Password</label>
                        <input type="password" class="form-control" name="repassword" placeholder="Confirm your password">
                    </div>
                    <div class="form-group">
                        <label class="label" for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email">
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
</body>

</html>