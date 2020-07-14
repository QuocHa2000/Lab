<?php
require "header-login.php";
require "controllers/post-submit.php";
?>

<head>
    <link rel="stylesheet" href="css/form-post.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6 col-sm-6 col-xs-12 row-container">
                <div>
                    <h1 class="h1">Đăng bài</h1>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="validationTextarea">Tiêu đề</label>
                        <textarea name="tieude" class="form-control" placeholder="Hãy điền nội dung tiêu đề vào đây" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="validationTextarea">Nội dung bài đăng</label>
                        <textarea name="noidung" class="form-control" placeholder="Hãy điền nội dung bài đăng vào đây" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>