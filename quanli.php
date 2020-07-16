<?php require('./controllers/postmn.php');
require('./controllers/postquanli.php');
?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/MySubmit.css">
    <script src="https://kit.fontawesome.com/c9801e10cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="./css/AboutUs.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/menu.css">
</head>
<header class="heading">
        <div class="logo-heading">
            <img src="./img/Logo.png" alt="">
        </div>
        <div class="nav-heading">
            <ul class="nav-heading--list">
                <li class="nav-heading--item">
                    <a href="index.php" class="nav-heading--item-link">
                        Trang chủ
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="Aboutus.php" class="nav-heading--item-link">
                        Thông tin
                    </a>
                </li>
                <li class="nav-heading--item" id="document">
                    <a href="document.php" class="nav-heading--item-link">
                        Tài liệu
                    </a>
                    <ul class="document-list">
                        <li class="document-item"><a  class="document-link" href="./document.php?subject=english">Tiếng Anh</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=js">Javascripts</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=css">Css</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=html">HTML</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=nodejs">Nodejs</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=php">PHP</a></li>
                    </ul>
                </li>
                <li class="nav-heading--item">
                    <a href="" class="nav-heading--item-link">
                        Bài tập
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="gopy-lienhe.php" class="nav-heading--item-link">
                        Liên hệ
                    </a>
                </li>
                <?php if (isset($_SESSION["admin"])) : ?>
                <li class="nav-heading--item">
                    <a href="quanli.php" class="nav-heading--item-link">
                        Quản lí
                    </a>
                </li>
                <?php endif; ?>
                <?php if (!isset($_SESSION["login"]) && !isset($_SESSION["admin"])) : ?>
                    <li class="nav-heading--item">
                        <a href="login.php" class="nav-heading--item-link">
                            Đăng nhập
                        </a>
                    </li>
                    <li class="nav-heading--item">
                        <a href="register.php" class="nav-heading--item-link">
                            Đăng ký
                        </a>
                    </li>
                <?php else : ?>
                    <li class="nav-heading--item" id="active">
                        <i class="far fa-user" style="font-size: 1.6rem;"></i>
                        <div class="user-info" id="user-info">
                          <?php
                                if(isset($_SESSION["login"]))
                                {
                                    echo "<h3>".$_SESSION["login"]."</h3>";
                                }
                                if(isset($_SESSION["admin"]))
                                {
                                    echo "<h3>".$_SESSION["admin"]."</h3>";
                                }
                          ?>
                            <a href="controllers/logout.php">Đăng xuất</a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
            <label for="check" class="nav-heading--icon">
                <i class="fas fa-bars"></i>
            </label>
            <input type="checkbox" hidden name="check" id="check">
            <label for="check" class="over-lay"></label for="check">
            <div class="nav-heading--small">
                <ul class="nav-small--list">
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Thông tin
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Tài liệu
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Liên hệ
                        </a>
                    </li>
                    <li class="nav-heading--item">
                    <a href="quanli.php" class="nav-heading--item-link">
                        Quản lí
                    </a>
                </li>
                    <?php if (!isset($_SESSION["login"])) : ?>
                        <li class="nav-small--item">
                            <a href="" class="nav-small--item-link">
                                Đăng nhập
                            </a>
                        </li>
                        <li class="nav-small--item">
                            <a href="" class="nav-small--item-link">
                                Đăng ký
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-small--item" id="active">
                            <i class="far fa-user"></i>
                            <div class="user-info" id="user-info">
                            <h3 style="font-size:1rem!important;"> <?php echo $_SESSION["login"]; ?></h3>
                                <a  style="font-size: 1rem;" href="controllers/logout.php">Đăng xuất</a>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
                <label for="check" class="nav-small--icon">
                    <i class="fas fa-times"></i>
                </label>
            </div>
        </div>
    </header>
<body class="background">
    <div class="content" style="margin : 0 100px">

        <h1 id="title" style="padding-top: 100px">
            <center> Quản Lí Nội Dung Trang </center>
        </h1>
        <blockquote id="description" style="width:600px">
        </blockquote>
        <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal">
            Thêm Tài Liệu Mới
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="padding: 0 8px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mã Môn Học</label>
                            <input  name="ma"  class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tên Môn Học</label>
                            <input  name="ten" class="form-control additem" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Phần 1</label>
                            <textarea class="form-control additem" name="phan1" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Phần 2</label>
                            <textarea class="form-control additem" name="phan2" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Phần 3</label>
                            <textarea class="form-control additem" name="phan3" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Phần 4</label>
                            <textarea class="form-control additem" name="phan4" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mã Level</label>
                            <input  name="malv" class="form-control additem" id="exampleFormControlInput1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" id="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-0">
            <thead>
                <tr>
                    <th scope="col">Mã Môn Học</th>
                    <th scope="col">Tên Môn Học</th>
                    <th scope="col">Tiêu Đề</th>
                    <th scope="col">Nội Dung</th>
                    <th scope="col">Link Ảnh</th>
                    <th scope="col">Link REF</th>
                    <th scope="col">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "web");
                $sql = "SELECT * FROM document;";
                mysqli_set_charset($conn, "utf8");
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row["MaMH"]; ?></td>
                            <td contenteditable="false"><?php echo $row["TenMH"]; ?></td>
                            <td contenteditable="false"><?php echo $row["TieuDe"]; ?></td>
                            <td contenteditable="false"><?php echo $row["NoiDung"]; ?></td>
                            <td contenteditable="false"><?php echo $row["LinkAnh"]; ?></td>
                            <td contenteditable="false"><?php echo $row["LinkREF"]; ?></td>
                            <td><button class="update btn btn-primary" style="margin : 2px" class="btn btn-primary">Sửa</button>
                                <button class="delete btn btn-primary" style="margin : 2px" class="btn btn-primary">Xóa</button>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/managedoc.js"></script>
<script src="./js/home.js"></script>
<script>
</script>

</html>