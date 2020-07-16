<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "web");
mysqli_set_charset($conn, "utf8");

$results_per_page = 4;

$monhoc = !empty($_GET["subject"])?$_GET["subject"]:"JAVASCRIPT";
// if (isset($_GET['subject'])) {
//     $monhoc = $_GET['subject'];
// }
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
    <script src="https://kit.fontawesome.com/c9801e10cc.js" crossorigin="anonymous"></script>
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

<body>
    <header class="heading" style="top: 0px;">
        <div id="content">
            <span class="slide">
                <a href="#" id="slide" onclick="openSlideMenu()">
                    <img src="./img/navcon.png" alt="" height="40px" style="margin-left:10px">
                </a>
            </span>
            <div id="menu" class="nav">
                <a href="#" class="close" onclick="closeSlideMenu()">
                    <img src="./img/close.png" alt="" height="30px">
                </a>
                <div style="display: flex;margin-top: 0;margin-left: 20px">
                    <img src="./img/homeicon.png" alt="" height="55px">
                    <a href="index.php">Home</a>
                </div>
                <?php
                $sql_monhoc="SELECT DISTINCT TenMH FROM document";
                $query=mysqli_query($conn, $sql_monhoc);
                if($query->num_rows>0)
                {
                    while ($row=mysqli_fetch_assoc($query)) {
                        
                    
                ?>
                <div style="display: flex;margin-top: 15px;margin-left: 20px">
                    <img src="./img/bookicon.png" alt="" height="50px">
                    <a href="document.php?subject=<?php echo $row["TenMH"]; ?>"><?php echo $row["TenMH"]; ?></a>
                </div>
                <?php
                    }
                }
                ?>
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
                </li>
                <li class="nav-heading--item">
                    <a href="gopy-lienhe.php" class="nav-heading--item-link">
                        Liên hệ
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="dspost.php" class="nav-heading--item-link">
                        Forum
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
                        <div class="user-info" id="user-info" style="z-index: 100;">
                            <?php
                                if(isset($_SESSION["login"]))
                                {
                                    echo "<h4>".$_SESSION["login"]."</h4>";
                                }
                                if(isset($_SESSION["admin"]))
                                {
                                    echo "<h4>".$_SESSION["admin"]."</h4>";
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
                        <a href="index.php" class="nav-small--item-link">
                            Trang Chủ
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="AboutUs.php" class="nav-small--item-link">
                            Thông tin <span class="typcn typcn-infinity"></span>
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="document.php" class="nav-small--item-link">
                            Tài Liệu
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="gopy-lienhe.php" class="nav-small--item-link">
                            Liên Hệ
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="dspost.php" class="nav-small--item-link">
                            Forum
                        </a>
                    </li>
                    <?php if (isset($_SESSION["admin"])) : ?>
                    <li class="nav-small--item">
                        <a href="quanli.php" class="nav-small--item-link">
                            Quản lí
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION["login"]) && !isset($_SESSION["admin"])) : ?>
                    <li class="nav-small--item">
                        <a href="login.php" class="nav-small--item-link">
                            Đăng nhập
                        </a>
                    </li>
                    <li class="nav-small--item">
                       <a href="register.php" class="nav-small--item-link">
                            Đăng ký
                        </a>
                    </li>
                    <?php else : ?>
                    <li class="nav-small--item">
                        <!-- <i class="far fa-user" style="font-size: 2.6rem;"></i> -->
                            
                    <a class="nav-small--item-link" href="controllers/logout.php">Đăng xuất</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <label for="check" class="nav-small--icon">
                    <i class="fas fa-times"></i>
                </label>
            </div>
        </div>
    </header>    
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

                <div class="col-md-4" style="max-width: 350px; margin-left:5px;">
                    <img src="<?php echo $row['LinkAnh'] ?>" class="card-img" alt="..." style="height:170px; width:auto; margin:5px 0px 5px 2px; ">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
<<<<<<< HEAD
                        <h5 class="card-title"><?php echo $row['TieuDe'] ?></h5>
                        <p class="card-text"></p><?php echo $row['NoiDung'] ?></p>
                        <p class="card-text"></p>Đăng ký khóa học ngay <a href="<?php echo $row['LinkREF'] ?>" target="_blank">tại đây</a></p>
                        <p class="card-text"><small class="text-muted">Last updated <?php echo rand(1,59) ?> mins ago</small></p>
=======
                        <h5 class="card-title" style="margin-top:-15px"><?php echo $row['TieuDe'] ?></h5>
                        <h6 class="card-text" style="margin-bottom:-15px;">  Giới thiệu khóa học </h6>  
                        <p class="card-text"></p>
                        <?php echo substr($row['NoiDung'],0,500).'...' ?>
                        </p>
                        <p class="card-text" style="margin-bottom:-15px;"></p>Đăng ký khóa học ngay <a href="<?php echo $row['LinkREF'] ?>" target="_blank">tại đây</a></p>
                        <p class="card-text" style="margin-top:-20px;margin-bottom:-15px;"><small class="text-muted">Last updated <?php echo rand(1,59) ?> mins ago</small></p>
>>>>>>> 82f073c5cdc6dfa3417f8bd172a0c5310fd775a9
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
<script src="js/home.js"></script>
</html>