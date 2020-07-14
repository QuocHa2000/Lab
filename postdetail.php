<?php require('./controllers/getpostdetail.php') ?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<style>
    .panel.panel-default {
        margin-bottom: 30px;
    }

    .icon {
        position: relative;
        top: 20px;
        left: 20px;
    }
</style>

<body>
    <span class="icon"><a href=""><i class="fas fa-arrow-circle-left" style="font-size: 3rem;"></i></a></span>
    <div class="header" style="margin-bottom: 50px;">
        <center>
            <h1 class="h1" style="margin-bottom: 30px;"><?php echo $row['TieuDePost'] ?></h1>
            <h5 style="font-size: 2rem;"> <?php echo $row['NoiDungPost'] ?> </h5>
        </center>
    </div>
    <div class="container">
        <div class="main">
            <div class="panel-group">
                <?php
                
                if($result1->num_rows>0){
                    while ($row1 = $result1->fetch_assoc()){
                        echo "<div class='panel panel-default'>";
                            echo "<div class='panel-heading'>Được đăng bởi <b>$row1[TenNguoiRep]</b></div>";
                            echo "<div class='panel-body'>";
                            echo "<div class='10'> $row1[NoiDungCmt]</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
        <footer>
            <h3>Bình Luận Bài Viết</h3>
            <form method="POST">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tên</label>
                    <input name="name" class="form-control" id="exampleFormControlInput1" value="<?php
                            if (isset($_SESSION['admin'])) {
                                echo $_SESSION['admin'];
                            } else if (isset($_SESSION['login'])) {
                                echo $_SESSION['login'];
                            }; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nội dung trả lời</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nội dung"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Đăng nội dung</button>
            </form>
        </footer>
    </div>

</body>

</html>