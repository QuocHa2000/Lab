<?php
$conn = mysqli_connect("localhost:3308", "root", "", "web");
mysqli_set_charset($conn, "utf8");

$results_per_page = 3;

$monhoc = "JAVASCRIPT";
if (isset($_GET['subject'])) {
    $monhoc = $_GET['subject'];
}
$sql = "SELECT * FROM document WHERE TenMH='$monhoc'";
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);

$number_of_pages = ceil($number_of_results / $results_per_page);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page - 1) * $results_per_page;

// retrieve selected results from database and display them on page
$sql = "SELECT * FROM document WHERE TenMH='$monhoc' LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sql);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="" href="./css/document.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .sticky {
            top: 0;
            width: 100%;
        }
    </style>
    <script>
        function openSlideMenu() {
            document.getElementById('menu').style.width = '350px';
            document.getElementById('content').style.marginLeft = '350px';
        }

        function closeSlideMenu() {
            document.getElementById('menu').style.width = '0';
            document.getElementById('content').style.marginLeft = '0';
        }
    </script>
    <script src="./js/modal.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <link href="./css/AboutUs.css" rel="stylesheet" />
</head>

<body style="background-color: #169DB2;">
    <header class="heading" style="top: 0px;">
        <div id="content">
            <span class="slide">
                <a href="#" id="slide" onclick="openSlideMenu()">
                    <img src="./img/navcon.png" alt="" height="40px" style="margin-left:10px">
                </a>
            </span>
            <div id="menu" class="nav">
                <!-- <div style="display: flex">
                    <img src="./img/testlogo1@2x.png" alt="">
                    <h2 style="margin-top: 60px">KIENTHUC.com</h2>
                </div> -->
                <a href="#" class="close" onclick="closeSlideMenu()">
                    <img src="./img/close.png" alt="" height="30px">
                </a>
                <div style="display: flex;margin-top: 0;margin-left: 20px">
                    <img src="./img/homeicon.png" alt="" height="55px">
                    <a href="index.php">Home</a>
                </div>
                <div style="display: flex;margin-top: 15px;margin-left: 20px">
                    <img src="./img/bookicon.png" alt="" height="50px">
                    <a href="document.php?subject=ENGLISH">Tiếng Anh</a>
                </div>
                <div style="display: flex;margin-top: 15px;margin-left: 20px">
                    <img src="./img/Science-Math-icon.png" alt="" height="50px">
                    <a href="document.php?subject=JAVASCRIPT">Javascripts</a>
                </div>
                <div style="display: flex;margin-top: 15px;margin-left: 20px">
                    <img src="./img/pngwing.com.png" alt="" height="50px">
                    <a href="document.php?subject=CSS">Css</a>
                </div>
                <div style="display: flex;margin-top: 15px;margin-left: 20px">
                    <img src="./img/chemistry.png" alt="" height="50px">
                    <a href="document.php?subject=HTML">HTML</a>
                </div>
                <div style="display: flex;margin-top: 15px;margin-left: 20px">
                    <img src="./img/bookicon.png" alt="" height="50px">
                    <a href="document.php?subject=NODEJS">Nodejs</a>
                </div>
                <div style="display: flex;margin-top: 15px;margin-left: 20px">
                    <img src="./img/htmlicon.png" alt="" height="50px">
                    <a href="document.php?subject=PHP">PHP</a>
                </div>
                <div style="display: flex;margin-top: 15px;margin-left: 20px">
                    <img src="./img/bookicon.png" alt="" height="50px">
                    <a href="document.php?subject=TOAN">Toán </a>
                </div>
                <div style="display: flex;margin-top: 15px;margin-left: 20px">
                    <img src="./img/cssicon.png" alt="" height="50px">
                    <a href="document.php?subject=VAT LY">Vật Lí</a>
                </div>
            </div>
        </div>
        <div class="logo-heading" style="max-width: 130px;">
            <img src="./img/Logo.png" alt="" style="margin-left: -15px;">
        </div>
        <div class="item2">
            <p class="logo" style="margin-top:15px;margin-left: -15px;">
                <b><?php echo $monhoc ?></b>
            </p>

        </div>
        <script>
            window.onscroll = function() {
                myFunction()
            };

            var header = document.getElementById("header");
            var sticky = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>
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
                        <li class="document-item"><a class="document-link" href="./document.php?subject=english">Tiếng Anh</a></li>
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
                            if (isset($_SESSION["login"])) {
                                echo "<h3>" . $_SESSION["login"] . "</h3>";
                            }
                            if (isset($_SESSION["admin"])) {
                                echo "<h3>" . $_SESSION["admin"] . "</h3>";
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
                                <a style="font-size: 1rem;" href="controllers/logout.php">Đăng xuất</a>
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
    <!-- <div class="header" id="header" style="padding-top:80px ;">
        <div class="item1">
            <div id="content">
                <span class="slide">
                    <a href="#" id="slide" onclick="openSlideMenu()">
                        <img src="./img/navcon.png" alt="" height="40px" style="margin-top:6px ;margin-left: 4px">
                    </a>
                </span>
                <div id="menu" class="nav">
                    <div style="display: flex">
                        <img src="./img/testlogo1@2x.png" alt="">
                        <h2 style="margin-top: 60px">KIENTHUC.com</h2>
                    </div>
                    <a href="#" class="close" onclick="closeSlideMenu()">
                        <img src="./img/close.png" alt="" height="30px">
                    </a>
                    <div style="display: flex;margin-top: 0;margin-left: 20px">
                        <img src="./img/homeicon.png" alt="" height="55px">
                        <a href="index.php">Home</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/bookicon.png" alt="" height="50px">
                        <a href="document.php?subject=ENGLISH">Tiếng Anh</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/Science-Math-icon.png" alt="" height="50px">
                        <a href="document.php?subject=JAVASCRIPT">Javascripts</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/pngwing.com.png" alt="" height="50px">
                        <a href="document.php?subject=CSS">Css</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/chemistry.png" alt="" height="50px">
                        <a href="document.php?subject=HTML">HTML</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/bookicon.png" alt="" height="50px">
                        <a href="document.php?subject=NODEJS">Nodejs</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/htmlicon.png" alt="" height="50px">
                        <a href="document.php?subject=PHP">PHP</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/bookicon.png" alt="" height="50px">
                        <a href="document.php?subject=TOAN">Toán </a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/cssicon.png" alt="" height="50px">
                        <a href="document.php?subject=VAT LY">Vật Lí</a>
                    </div>
                </div>
            </div>

            <img src="./img/testlogo1@2x.png" alt="logo" height="60" class="navicon">
        </div>
        <div class="item2">
            <p class="logo">
                <B></B>
            </p>

        </div>
        <script>
            window.onscroll = function() {
                myFunction()
            };

            var header = document.getElementById("header");
            var sticky = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>
        <div class="notifi">
            <img src="./img/notifications-button.png" alt="" class="headericon" style="height: 20px;margin-right: 5px">
            <img src="./img/accounticon.png" alt="" class="headericon " style="height: 20px">
        </div>
    </div> -->

    <!-- Start Code by HoaiBao -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
    <div class="card mb-3 border-secondary bg-light">
        
            <div class="row no-gutters">

                <div class="col-md-4" style="max-width: 180px">
                    <img src="<?php echo $row['LinkAnh'] ?>" class="card-img" alt="..." style="height:170px; width:auto; margin:5px 0px 5px 2px; ">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['Intro'] ?></h5>
                        <p class="card-text"></p><?php echo $row['description'] ?></p>
                        <p class="card-text"></p>Đăng ký khóa học ngay <a href="<?php echo $row['LinkREF'] ?>" target="_blank">tại đây</a></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
    </div>
        <?php } ?>

    <div class="container">
        <ul class="pagination justify-content-end">
        <?php
        for ($page = 1; $page <= $number_of_pages; $page++) {
            echo '<li class="page-item"><a class="page-link" href="../Lab/document.php?subject=' . $monhoc . '&page=' . $page . '">' . $page . '</a> ';
        }
        ?>
        </ul>
    </div>



</body>

</html>
<!--  <div class="card mb-3 border-secondary bg-light" >
        <div class="row no-gutters">
            <div class="col-md-4" style="max-width: 180px">
                <img src="https://blog.vandersonguidi.com.br/wp-content/uploads/2016/11/js3.png" class="card-img" alt="..." style="height:170px; width:auto; margin:5px 0px 5px 2px; ">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo 'KHÓA HỌC ' . $monhoc . ' LEVEL TRUNG BÌNH 1'; ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"></p>Đăng ký khóa học ngay <a href="https://www.youtube.com/watch?v=fntSBgoCsOE&list=RDfntSBgoCsOE&start_radio=1">tại đây</a></p>
                    <p class="card-text"><small class="text-muted">Last updated 47 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 border-secondary bg-light" >
        <div class="row no-gutters">
            <div class="col-md-4" style="max-width: 180px">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLEvaRLgLBBHet9MVOEOXHyiE31UGc_DCgSg&usqp=CAU" class="card-img" alt="..." style="height:170px; width:auto; margin:5px 0px 5px 2px; ">
            </div>
            <div class="col-md-8" style="max-width: 800px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo 'KHÓA HỌC ' . $monhoc . ' LEVEL TRUNG BÌNH 2'; ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"></p>Đăng ký khóa học ngay <a href="https://www.youtube.com/watch?v=fntSBgoCsOE&list=RDfntSBgoCsOE&start_radio=1">tại đây</a></p>
                    <p class="card-text"><small class="text-muted">Last updated 2 years ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 border-secondary bg-light" >
        <div class="row no-gutters">
            <div class="col-md-4" style="max-width: 180px">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSsiT6IVZqxwjYFgAdhl8PeiYtcAo7mTAOEqg&usqp=CAU" class="card-img" alt="..." style="height:170px; width:auto; margin:5px 0px 5px 2px; ">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo 'KHÓA HỌC ' . $monhoc . ' LEVEL NÂNG CAO'; ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"></p>Đăng ký khóa học ngay <a href="https://www.youtube.com/watch?v=fntSBgoCsOE&list=RDfntSBgoCsOE&start_radio=1">tại đây</a></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 years ago</small></p>
                </div>
            </div>
        </div>
    </div>-->