<?php
$conn = mysqli_connect("localhost:3308", "root", "", "web");
mysqli_set_charset($conn, "utf8");
$monhoc = "JAVASCRIPT";
if (isset($_GET['subject'])) {
    $monhoc = $_GET['subject'];
}
$sql = "SELECT * FROM document WHERE document.TenMH = '$monhoc' and document.Malevel='cb';";
$result = $conn->query($sql)->fetch_assoc();

$sql = "SELECT * FROM document WHERE document.TenMH = '$monhoc' and document.Malevel='tb1';";
$result2 = $conn->query($sql)->fetch_assoc();

$sql = "SELECT * FROM document WHERE document.TenMH = '$monhoc' and document.Malevel='tb2';";
$result3 = $conn->query($sql)->fetch_assoc();

$sql = "SELECT * FROM document WHERE document.TenMH = '$monhoc' and document.malevel='nc';";
$result4 = $conn->query($sql)->fetch_assoc();
// require('./controllers/header.php');
// session_start();
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
    <div class="container" >
        <ul class="pagination "style="margin-left: 90px; margin-top:20px;">
            <li class="page-item"><a class="page-link" href="#">Trước</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item "><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Sau</a></li>
        </ul>
    </div>
    <div class="card mb-3 border-secondary bg-light" >
        <div class="row no-gutters">
            <div class="col-md-4" style="max-width: 180px">
                <img src="https://st.quantrimang.com/photos/image/2018/06/15/lap-trinh-blockchain-phan-2-ngon-ngu-lap-trinh-javascript-200.jpg" class="card-img" alt="..." style="height:170px; width:auto; margin:5px 0px 5px 2px; ">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo 'KHÓA HỌC '. $monhoc . ' CƠ BẢN DÀNH CHO NGƯỜI MỚI BẮT ĐẦU'; ?></h5>
                    <p class="card-text"></p>Khóa học được thiết kế dành cho những bản đi từ con số 0 tự tin có thể học được. </p>
                    <p class="card-text"></p>Đăng ký khóa học ngay <a href="https://www.youtube.com/watch?v=fntSBgoCsOE&list=RDfntSBgoCsOE&start_radio=1" target="_blank">tại đây</a></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 border-secondary bg-light" >
        <div class="row no-gutters">
            <div class="col-md-4" style="max-width: 180px">
                <img src="https://blog.vandersonguidi.com.br/wp-content/uploads/2016/11/js3.png" class="card-img" alt="..." style="height:170px; width:auto; margin:5px 0px 5px 2px; ">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo 'KHÓA HỌC '.$monhoc . ' LEVEL TRUNG BÌNH 1'; ?></h5>
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
                    <h5 class="card-title"><?php echo 'KHÓA HỌC '.$monhoc . ' LEVEL TRUNG BÌNH 2'; ?></h5>
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
                    <h5 class="card-title"><?php echo 'KHÓA HỌC '.$monhoc . ' LEVEL NÂNG CAO'; ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"></p>Đăng ký khóa học ngay <a href="https://www.youtube.com/watch?v=fntSBgoCsOE&list=RDfntSBgoCsOE&start_radio=1">tại đây</a></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 years ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" >
        <ul class="pagination justify-content-end">
            <li class="page-item"><a class="page-link" href="#">Trước</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Sau</a></li>
        </ul>
    </div>
    <!-- EndCode by HoaiBao -->
    <!-- <br id="move1">
    <div>
        <div class="sectionegg">
            <br>
            <div class="sectitle">
                <?php
                echo $monhoc . ' Cơ Bản';
                $level = 'cb';
                ?>
            </div>
            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn2" style="color: black;" value="phan1">
                        <p class="rowitemcon">Phần 1</p>

                    </button>
                    <div class="modal-bg2">
                        <div class="modal2" id="1cbphan">
                            <?php echo "$result[phan1]" ?>
                            <div id="close2">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn3" style="color: black;">
                        <p class="rowitemcon">Phần 2 </p>
                    </button>
                    <div class="modal-bg3">
                        <div class="modal3"><?php echo "$result[Phan2]" ?>
                            <div id="close3">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
            </div>

            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn4" style="color: black;">
                        <p class="rowitemcon">Phần 3 </p>
                    </button>
                    <div class="modal-bg4">
                        <div class="modal4"><?php echo "$result[Phan3]" ?>
                            <div id="close4">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn5" style="color: black;">
                        <p class="rowitemcon">Phần 4 </p>
                    </button>
                    <div class="modal-bg5">
                        <div class="modal5"><?php echo "$result[Phan4]" ?>
                            <div id="close5">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
            </div>
            <a href="#" style="text-decoration: none;" class="backbutton">
                <button onclick="top()" style="margin-top: 4px;background-color:transparent;border:none;color:black;">Back to the top</button>
            </a>


            <div class="test">
                <P style="margin-right: 60px;z-index:0">Confident ? Let's have a little test shall we! </P>
                <button id="modal-btn" class="button" style="z-index: 0;">
                    TEST
                </button>
            </div>
        </div>

    </div>



    <div class="modal-bg">
        <div class="modal">
            <h2>test</h2>
            <p>
                Tuy nhiên, mới đây, theo tiết lộ từ nhật báo Tây Ban Nha Mundo Deportivo (thân Barca ở xứ Catalunya), trước khi để mắt đến Lautaro Martinez, Barca đã rất quyết tâm muốn chiêu mộ Harry Kane (Tottenham Hotspur) trong kỳ chuyển nhượng mùa Hè 2019. Lúc ấy,
                trung phong nổi tiếng của ĐT Anh cũng đang được MU và Real Madrid rất quan tâm. Chủ tịch Barca - ông Josep Maria Bartomeu thậm chí đã liên hệ với người đồng cấp bên phía Tottenham - ông Daniel Levy để thương thảo về phi vụ này. Tuy nhiên,
                Levy đã từ chối bán Kane do xác định ngôi sao này là "quân bài quan trọng số 1" giúp Spurs cạnh tranh vị trí cao ở giải Ngoại hạng Anh với những đối thủ lớn trong nhóm "Big 6".
            </p>
            <div id="close"><a>+</a></div>

        </div>

    </div>




    <br id="move2">


    <div style="z-index: 0;">
        <div class="sectionegg">
            <br>
            <div class="sectitle">
                <?php
                echo $monhoc . ' Trung Bình 1 ';
                ?>
            </div>
            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn6" style="color: black;">
                        <p class="rowitemcon">Phần 1</p>

                    </button>
                    <div class="modal-bg6">
                        <div class="modal6"> <?php echo "$result2[Phan1]" ?>
                            <div id="close6">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn7" style="color: black;">
                        <p class="rowitemcon">Phần 2 </p>
                    </button>
                    <div class="modal-bg7">
                        <div class="modal7"><?php echo "$result2[Phan2]" ?>
                            <div id="close7">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
            </div>

            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn8" style="color: black;">
                        <p class="rowitemcon">Phần 3 </p>
                    </button>
                    <div class="modal-bg8">
                        <div class="modal8"><?php echo "$result2[Phan3]" ?>
                            <div id="close8">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn9" style="color: black;">
                        <p class="rowitemcon">Phần 4 </p>
                    </button>
                    <div class="modal-bg9">
                        <div class="modal9"><?php echo "$result2[Phan4]" ?>
                            <div id="close9">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
            </div>
            <a href="#" style="text-decoration: none;" class="backbutton">
                <button onclick="top()" style="margin-top: 4px;background-color:transparent;border:none;color:black;">Back to the top</button>
            </a>
            <div class="test">
                <P style="margin-right: 60px;z-index:0">Confident ? Let's have a little test shall we! </P>
                <button id="modal-btn10" class="button" style="z-index: 0;">
                    TEST
                </button>
            </div>
        </div>

    </div>




    <div class="modal-bg10">
        <div class="modal10">
            <h2>test</h2>
            <p>
                Tuy nhiên, mới đây, theo tiết lộ từ nhật báo Tây Ban Nha Mundo Deportivo (thân Barca ở xứ Catalunya), trước khi để mắt đến Lautaro Martinez, Barca đã rất quyết tâm muốn chiêu mộ Harry Kane (Tottenham Hotspur) trong kỳ chuyển nhượng mùa Hè 2019. Lúc ấy,
                trung phong nổi tiếng của ĐT Anh cũng đang được MU và Real Madrid rất quan tâm. Chủ tịch Barca - ông Josep Maria Bartomeu thậm chí đã liên hệ với người đồng cấp bên phía Tottenham - ông Daniel Levy để thương thảo về phi vụ này. Tuy nhiên,
                Levy đã từ chối bán Kane do xác định ngôi sao này là "quân bài quan trọng số 1" giúp Spurs cạnh tranh vị trí cao ở giải Ngoại hạng Anh với những đối thủ lớn trong nhóm "Big 6".
            </p>
            <div id="close10"><a>+</a></div>

        </div>





    </div>


    <br id="move3">


    <div style="z-index: 0;">
        <div class="sectionegg">
            <br>
            <div class="sectitle">
                <?php
                echo $monhoc . ' Trung Bình 2 ';
                ?>
            </div>
            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn11" style="color: black;">
                        <p class="rowitemcon">Phần 1</p>

                    </button>
                    <div class="modal-bg11">
                        <div class="modal11"> <?php echo "$result3[Phan1]" ?>
                            <div id="close11">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn12" style="color: black;">
                        <p class="rowitemcon">Phần 2 </p>
                    </button>
                    <div class="modal-bg12">
                        <div class="modal12"><?php echo "$result3[Phan2]" ?>
                            <div id="close12">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
            </div>

            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn13" style="color: black;">
                        <p class="rowitemcon">Phần 3 </p>
                    </button>
                    <div class="modal-bg13">
                        <div class="modal13"><?php echo "$result3[Phan3]" ?>
                            <div id="close13">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn14" style="color: black;">
                        <p class="rowitemcon">Phần 4 </p>
                    </button>
                    <div class="modal-bg14">
                        <div class="modal14"><?php echo "$result3[Phan4]" ?>
                            <div id="close14">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
            </div>
            <a href="#" style="text-decoration: none;" class="backbutton">
                <button onclick="top()" style="margin-top: 4px;background-color:transparent;border:none;color:black;">Back to the top</button>
            </a>
            <div class="test">
                <P style="margin-right: 60px;z-index:0">Confident ? Let's have a little test shall we! </P>
                <button id="modal-btn15" class="button" style="z-index: 0;">
                    TEST
                </button>
            </div>
        </div>

    </div>




    <div class="modal-bg15">
        <div class="modal15">
            <h2>test</h2>
            <p>
                Tuy nhiên, mới đây, theo tiết lộ từ nhật báo Tây Ban Nha Mundo Deportivo (thân Barca ở xứ Catalunya), trước khi để mắt đến Lautaro Martinez, Barca đã rất quyết tâm muốn chiêu mộ Harry Kane (Tottenham Hotspur) trong kỳ chuyển nhượng mùa Hè 2019. Lúc ấy,
                trung phong nổi tiếng của ĐT Anh cũng đang được MU và Real Madrid rất quan tâm. Chủ tịch Barca - ông Josep Maria Bartomeu thậm chí đã liên hệ với người đồng cấp bên phía Tottenham - ông Daniel Levy để thương thảo về phi vụ này. Tuy nhiên,
                Levy đã từ chối bán Kane do xác định ngôi sao này là "quân bài quan trọng số 1" giúp Spurs cạnh tranh vị trí cao ở giải Ngoại hạng Anh với những đối thủ lớn trong nhóm "Big 6".
            </p>
            <div id="close15"><a>+</a></div>

        </div>




    </div>




    <br id="move4">


    <div style="z-index: 0;">
        <div class="sectionegg">
            <br>
            <div class="sectitle">
                <?php
                echo $monhoc . ' Nâng Cao ';
                ?>
            </div>
            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn16" style="color: black;">
                        <p class="rowitemcon">Phần 1</p>

                    </button>
                    <div class="modal-bg16">
                        <div class="modal16"> <?php echo "$result4[Phan1]" ?>
                            <div id="close16">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn17" style="color: black;">
                        <p class="rowitemcon">Phần 2 </p>
                    </button>
                    <div class="modal-bg17">
                        <div class="modal17"><?php echo "$result4[Phan2]" ?>
                            <div id="close17">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
            </div>

            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn18" style="color: black;">
                        <p class="rowitemcon">Phần 3 </p>
                    </button>
                    <div class="modal-bg18">
                        <div class="modal18"><?php echo "$result4[Phan3]" ?>
                            <div id="close18">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
                <div class="rowsec">
                    <button class="rowitem" id="modal-btn19" style="color: black;">
                        <p class="rowitemcon">Phần 4 </p>
                    </button>
                    <div class="modal-bg19">
                        <div class="modal19"><?php echo "$result4[Phan4]" ?>
                            <div id="close19">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>

                </div>
            </div>
            <a href="#" style="text-decoration: none;" class="backbutton">
                <button onclick="top()" style="margin-top: 4px;background-color:transparent;border:none;color:black;">Back to the top</button>
            </a>
            <div class="test">
                <P style="margin-right: 60px;z-index:0">Confident ? Let's have a little test shall we! </P>
                <button id="modal-btn20" class="button" style="z-index: 0;">
                    TEST
                </button>
            </div>
        </div>

    </div>




    <div class="modal-bg20">
        <div class="modal20">
            <h2>test</h2>
            <p>
                Tuy nhiên, mới đây, theo tiết lộ từ nhật báo Tây Ban Nha Mundo Deportivo (thân Barca ở xứ Catalunya), trước khi để mắt đến Lautaro Martinez, Barca đã rất quyết tâm muốn chiêu mộ Harry Kane (Tottenham Hotspur) trong kỳ chuyển nhượng mùa Hè 2019. Lúc ấy,
                trung phong nổi tiếng của ĐT Anh cũng đang được MU và Real Madrid rất quan tâm. Chủ tịch Barca - ông Josep Maria Bartomeu thậm chí đã liên hệ với người đồng cấp bên phía Tottenham - ông Daniel Levy để thương thảo về phi vụ này. Tuy nhiên,
                Levy đã từ chối bán Kane do xác định ngôi sao này là "quân bài quan trọng số 1" giúp Spurs cạnh tranh vị trí cao ở giải Ngoại hạng Anh với những đối thủ lớn trong nhóm "Big 6".
            </p>
            <div id="close20"><a>+</a></div>

        </div>


    </div> -->
    <script src="../Lab/js/modal.js"></script>





</body>

</html>
<script src="./js/home.js"></script>
<script>
    function egg1() {
        var egg = document.getElementById("move1");
        egg.scrollIntoView();
    }

    function egg2() {
        var egg = document.getElementById("move2");
        egg.scrollIntoView();
    }

    function egg3() {
        var egg = document.getElementById("move3");
        egg.scrollIntoView();
    }

    function egg4() {
        var egg = document.getElementById("move4");
        egg.scrollIntoView();
    }

    function top() {
        var tothetop = document.getElementById("top");
        tothetop.scrollIntoView();
    }

    function levelmonhoc(monhoc, level) {
        $.ajax({
            url: "/Lab/subject.php",
            type: "post",
            dataType: "text",
            data: {
                code: monhoc,
                level: level,
                part: $('button').val()
            },
            success: function(data) {
                $('#1cbphan').html(data);
            }

        })
    }
</script>