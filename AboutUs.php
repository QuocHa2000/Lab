<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./font/fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link href="./css/AboutUs.css" rel="stylesheet" />
    
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
<div class="bg-light">
        <div class="container py-5">
          <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
              <h1 class="display-4">Giới thiệu </h1>
              <p class="lead text-muted mb-0">Website được tạo ra vào nửa đầu năm 2020 bởi một nhóm sinh viên đầy tài năng trường ĐH Công Nghệ Thông Tin.</p>
              <p class="lead text-muted"> <a href="#" class="text-muted"> 
                          <u>kienthucedu.com</u></a>
              </p>
            </div>
            <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
          </div>
        </div>
      </div>
      
      <div class="bg-white py-5">
        <div class="container py-5">
          <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
              <h2 class="font-weight-light">Chất lượng đào tạo </h2>
              <p class="font-italic text-muted mb-4">Với nguồn tài liệu thu thập và tìm kiếm đạt chuẩn những kiến thức theo đúng xu hướng và thời đại. KienThuc WebEdu tự tin cung cấp những tài liệu và bài giảng tốt nhất đến cho mọi người.</p><a href="./document.php" class="btn btn-light px-5 rounded-pill shadow-sm">Xem thêm</a>
            </div>
            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
              <h2 class="font-weight-light">Hệ thống bài tập</h2>
              <p class="font-italic text-muted mb-4">Ở KienThuc.com người học có thể dễ dàng luyện tập các challenge, các quiz mà đội ngũ quản trị viên cũng như các giảng viên biên soạn. </p><a href="./document.php" class="btn btn-light px-5 rounded-pill shadow-sm">Xem thêm</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="bg-light py-5">
        <div class="container py-5">
          <div class="row mb-4">
            <div class="col-lg-5">
              <h2 class="display-4 font-weight-light">Quản trị viên</h2>
              <p class="font-italic text-muted">Chúng tôi thành lập ra cộng đồng chia sẻ kiến thức với mong muốn chia sẽ tri thức đến mọi người.
                Thế giới này đã dần không còn biên giới ngăn cách. Đặc biệt là trong tri thức nhân loại. </p>
            </div>
          </div>
      
          <div class="row text-center">
            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
              <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./img/profile.jpg" alt="" width="100" style="height: 100px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Hà Vương Quốc</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- End-->
      
            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
              <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./img/Bao.jpg" alt="" width="100" style="height: 100px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Phù Hoài Bão</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- End-->
      
            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
              <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./img/Quan.jpg" alt="" width="100"  style="height: 100px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Phạm Hồ Anh Quân</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- End-->
      
            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
              <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./img/Thuan.jpg" alt="" width="100" style="height: 100px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Đào Huỳnh Minh Thuận</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- End-->
      
          </div>
        </div>
      </div>
      
      
      <footer class="bg-light pb-5">
        <div class="container text-center">
          <p class="font-italic text-muted mb-0">&copy; Copyrights kienthucedu.com All rights reserved.</p>
        </div>
      </footer>    
</body>
<script src="./js/home.js"></script>
</html>