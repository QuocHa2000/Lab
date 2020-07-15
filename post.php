<?php
require "header-login.php";
require "controllers/post-submit.php";
?>

<head>
    <link rel="stylesheet" href="css/form-post.css">
</head>

<style>
    .icon{
        position: relative;
        top: 20px;
        left: 20px;
    }
</style>
<body>
    <span class="icon"><a href=""><i class="fas fa-arrow-circle-left" style="font-size: 3rem; color : #eea412;"></i></a></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="container" style="margin-top: 30px;">
                <div>
                    <h1 class="h1" style="font-size: 36px;">Đăng bài</h1>
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
                        <button type="submit" name="submit" class="btn btn-primary">Đăng bài</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>