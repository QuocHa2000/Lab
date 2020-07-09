<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="./font/fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="./css/Home.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/menu.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
</head>

<body>
    <header class="heading">
        <div class="logo-heading">
            <img src="./img/Logo.png" alt="">
        </div>
        <div class="nav-heading">
            <ul class="nav-heading--list">
                <li class="nav-heading--item">
                    <a href="index.php" class="nav-heading--item-link">
                        Trang Chủ
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="Aboutus.php" class="nav-heading--item-link">
                        Thông tin
                    </a>
                </li>
                <li class="nav-heading--item" id="document">
                    <a href="document.php" class="nav-heading--item-link">
                        Tài Liệu
                    </a>
                    <ul class="document-list">
                        <li class="document-item"><a class="document-link" href="./document.php?subject=ENGLISH">Tiếng Anh</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=JAVASCRIPT">Javascripts</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=CSS">Css</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=HTML">HTML</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=NODEJS">Nodejs</a></li>
                        <li class="document-item"><a class="document-link" href="./document.php?subject=PHP">PHP</a></li>
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
                <li class="nav-heading--item">
                    <a href="quanli.php" class="nav-heading--item-link">
                        Quản lí
                    </a>
                </li>
                <?php if (!isset($_SESSION["login"])) : ?>
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
                        <i class="far fa-user" style="font-size: 2.6rem;"></i>
                        <div class="user-info" id="user-info">
                            <h3><?php echo $_SESSION["login"]; ?></h3>
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
                            Trang Chủ
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Thông <span class="typcn typcn-infinity"></span>
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Tài Liệu
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Bài Tập
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Liên Hệ
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
                            <i class="far fa-user" style="font-size: 2.6rem;"></i>
                            <div class="user-info" id="user-info">
                                <h3><?php echo $_SESSION["login"]; ?></h3>
                                <a href="controllers/logout.php">Đăng xuất</a>
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