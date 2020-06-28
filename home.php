<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home Page</title>
    <link href="css/Home.css" rel="stylesheet" />
    <link rel="stylesheet" href="font/fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header class="heading">
        <div class="logo-heading">
            <img src="./img/Logo.png" alt="">
        </div>
        <div class="nav-heading">
            <ul class="nav-heading--list">
                <li class="nav-heading--item">
                    <a href="" class="nav-heading--item-link">
                        Home
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="" class="nav-heading--item-link">
                        About us
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="" class="nav-heading--item-link">
                        Document
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="" class="nav-heading--item-link">
                        Exercises
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="" class="nav-heading--item-link">
                        Contact
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="" class="nav-heading--item-link">
                        BookMark
                    </a>
                </li>
                <li class="nav-item dropdown no-arrow"> 
                <a class="dropdown-item" href="controllers/logout.php">
                  Logout
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
              </div>
            </li>
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
                            Home
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            About us
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Document
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Exercises
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Contact
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Login
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            Register
                        </a>
                    </li>
                    <li class="nav-small--item">
                        <a href="" class="nav-small--item-link">
                            BookMark
                        </a>
                    </li>
                    
                </ul>
                
                <label for="check" class="nav-small--icon">
                    <i class="fas fa-times"></i>
                </label>
            </div>
        </div>
    </header>
    <div class="home-main">
        <div class="home-main--text">
            <h1 class="home-main--heading"><span>KienThuc</span>
                <div>WebEdu</div>
            </h1>
            <h4 class="home-main--content">Chúng ta cùng nhau chia sẽ kiến thức để có thể giúp nhau cùng tiến bộ và
                sẽ
                tạo thành một cộng đồng vững mạnh </h4>
            <ul class="home-main--list">
                <li class="home-main--item">
                    <a href="#" class="home-main--link">CONTACT US </a>
                </li>
                <li class="home-main--item">
                    <a href="#" class="home-main--link">READ MORE</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="container-about">
            <div class="container-about--heading">
                <h1 class="container-about--heading1">
                    About
                </h1>
                <p class="container-about--heading-content">
                    Chúng tôi xây dựng một nền tảng chia sẽ nhiều kiến thức ở nhiều lĩnh vực khác nhau nhằm tạo nên
                    một
                    cộng đồng <br> giúp nhau cùng phát triển và cùng nhau thành công .
                </p>
            </div>
        </div>
        <div class="container-about--main">
            <div class="container-about--main-left">
                <h1 class="container-about--main-heading">
                    Chào mừng đến với KienThuc Web education
                </h1>
                <p class="container-about--main-content">
                    Chúng tôi mang lại cho bạn những kiến thức bổ ích ở nhiều lĩnh vực khác nhau
                </p>
                <p class="container-about--main-content">
                    Xây dựng 1 hệ thống kiến thức nền tảng từ cơ bản đến nâng cao. Kèm theo đó là lượng bài tập rộng
                    lớn
                    giúp bạn luyện tập sau khi học Lí Thuyết
                </p>
                <center><a href="#" class="container-about--main-link">Read More</a></center>
                <img src="https://www.greatschools.org/gk/wp-content/uploads/2014/03/The-school-visit-what-to-look-for-what-to-ask-1.jpg"
                    alt="" class="container-about--main-img">
            </div>
            <div class="container-about--main-right">
                <img src="https://www.greatschools.org/gk/wp-content/uploads/2014/03/The-school-visit-what-to-look-for-what-to-ask-1.jpg"
                    alt="" class="container-about--main-img" style="margin-bottom: 50px;">
                <div class="container-about--main-content">
                    <h1 class="container-about--main-heading">
                        Chào mừng đến với KienThuc Web education
                    </h1>
                    <p class="container-about--main-content">
                        Chúng tôi mang lại cho bạn những kiến thức bổ ích ở nhiều lĩnh vực khác nhau
                    </p>
                    <p class="container-about--main-content">
                        Xây dựng 1 hệ thống kiến thức nền tảng từ cơ bản đến nâng cao. Kèm theo đó là lượng bài tập rộng
                        lớn
                        giúp bạn luyện tập sau khi học Lí Thuyết
                    </p>
                    <center><a href="#" class="container-about--main-link">Read More</a></center>
                </div>

            </div>
        </div>
    </div>
    <div class="container-history">
        <div class="container-history--header">
            <h1 class="container-history--header1">
                Our History
            </h1>
            <p class="container-history--header-text">
                Quá trình hình thành và phát triển để tạo dựng nên 1 cộng đồng chia sẽ kiến thức rộng lớn với những
                kiến
                thức chất lượng <br> cùng với đó là các thành viên trong cộng đồng nhiệt huyết và sẵn sàng hổ trọ
                lẫn
                nhau
            </p>
        </div>
        <div class="container-history--main">
            <div class="container-history--main-s">
                <div class="container-history--main-si">
                    <div class="container-history--main-text">
                        <h1> 2018 </h1>
                        <p>Bắt đầu thành lập cộng đồng và chia sẽ các kiến thức thông qua website đến tất cả các
                            thành
                            viên đầu tiên của cộng đồng </p>
                    </div>
                </div>
                <i class="fas fa-arrows-alt-v"></i>
                <div class="container-history--main-si">
                    <div class="container-history--main-text">
                        <h1> 2018 </h1>
                        <p>Bắt đầu thành lập cộng đồng và chia sẽ các kiến thức thông qua website đến tất cả các
                            thành
                            viên đầu tiên của cộng đồng </p>
                    </div>
                </div>
            </div>
            <div class="container-history--main-s">
                <div class="container-history--main-si">
                    <div class="container-history--main-text">
                        <h1> 2018 </h1>
                        <p>Bắt đầu thành lập cộng đồng và chia sẽ các kiến thức thông qua website đến tất cả các
                            thành
                            viên đầu tiên của cộng đồng </p>
                    </div>
                </div>
                <i class="fas fa-arrows-alt-v"></i>
                <div class="container-history--main-si">
                    <div class="container-history--main-text">
                        <h1> 2018 </h1>
                        <p>Bắt đầu thành lập cộng đồng và chia sẽ các kiến thức thông qua website đến tất cả các
                            thành
                            viên đầu tiên của cộng đồng </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-count">
        <div class="container-count--main">
            <div class="container-count--main-content">
                <div class="container-count--main-icon">
                    <i class="fas fa-book-reader"></i>
                </div>
                <div class="container-count--main-text">
                    <h1 class="container-count--main-heading">
                        5000
                    </h1>
                    <p class="container-count--main-text1">
                        Participants
                    </p>
                </div>
            </div>
            <div class="container-count--main-content">
                <div class="container-count--main-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="container-count--main-text">
                    <h1 class="container-count--main-heading">
                        50
                    </h1>
                    <p class="container-count--main-text1">
                        Field
                    </p>
                </div>
            </div>
            <div class="container-count--main-content">
                <div class="container-count--main-icon">
                    <i class="far fa-calendar-alt"></i>
                </div>
                <div class="container-count--main-text">
                    <h1 class="container-count--main-heading">
                        3
                    </h1>
                    <p class="container-count--main-text1">
                        Years
                    </p>
                </div>
                </p>
            </div>
        </div>
    </div>
    <div class="container-field">
        <div class="container-field--heading">
            <h1 class="container-field--header">
                Main Subjects
            </h1>
            <p class="container-field--text">
                Một vài lĩnh vực và môn học nổi bật được các thành viên truy cập nhiều nhất
            </p>
        </div>
        <div class="container-field--main" style="margin-bottom: 50px; ">
            <ul class="container-field--main-list">
                <li class="container-field--main-item">
                    <a href="" class="container-field--main-link">Tiếng Anh</a>
                </li>
                <li class="container-field--main-item"><a href="" class="container-field--main-link">
                        Javascripts</a>
                </li>
                <li class="container-field--main-item">
                    <a href="" class="container-field--main-link">Css </a>
                </li>
                <li class="container-field--main-item"><a href="" class="container-field--main-link">Html</a></li>
            </ul>
        </div>
        <div class="container-field--main">
            <ul class="container-field--main-list">
                <li class="container-field--main-item"><a href="" class="container-field--main-link">Nodejs</a>
                </li>
                <li class="container-field--main-item"><a href="" class="container-field--main-link">PHP</a></li>
                <li class="container-field--main-item"><a href="" class="container-field--main-link">Toán</a></li>
                <li class="container-field--main-item"><a href="" class="container-field--main-link">Vật lí </a>
                </li>
        </div>

    </div>
    <div class="container-founder">
        <div class="container-founder--heading">
            <h1 class="container-founder--header">
                Founders
            </h1>
            <p class="container-founder--text">
                Nhóm thành lập nên cộng đồng chia sẻ KienThuc
            </p>
        </div>
        <div class="container-founder--main">
            <div class="container-founder--main-st">
                <div class="container-founder--main-gr">
                    <img src="./img/profile.jpg" alt="" class="container-founder--main-img">
                    <p class="container-founder--main-name">Ha Vuong Quoc</p>
                    <div class="container-founder--main-content">
                        <div class="container-founder--main-content-heading">
                            <i class="fas fa-quote-left"></i>
                            <h1 class="container-founder--main-content-header">
                                Advice
                            </h1>
                        </div>
                        <div class="container-founder--main-content-text">
                            Hãy kỉ luật thật nghiêm khắc với bản thân mình và thực hiện những mục tiêu mà mình đặt ra.
                        </div>
                    </div>
                </div>
                <div class="container-founder--main-gr">
                    <img src="./img/Bao.jpg" alt="" class="container-founder--main-img">
                    <p class="container-founder--main-name">Phu Hoai Bao</p>
                    <div class="container-founder--main-content" style="height: 140px" ;>
                        <div class="container-founder--main-content-heading">
                            <i class="fas fa-quote-left"></i>
                            <h1 class="container-founder--main-content-header">
                                Advice
                            </h1>
                        </div>
                        <div class="container-founder--main-content-text">
                            Hãy học tập để thấy ngày hôm qua mình thật nhỏ bé.
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-founder--main-st">
                <div class="container-founder--main-gr">
                    <img src="./img/Quan.jpg" alt="" class="container-founder--main-img">
                    <p class="container-founder--main-name">Pham Ho Anh Quan</p>
                    <div class="container-founder--main-content">
                        <div class="container-founder--main-content-heading">
                            <i class="fas fa-quote-left"></i>
                            <h1 class="container-founder--main-content-header">
                                Advice
                            </h1>
                        </div>
                        <div class="container-founder--main-content-text">
                            Nhưng gì chúng ta biết ngày hôm nay sẽ lỗi thời vào ngày hôm sau.Nếu chúng ta ngừng học
                            thì chúng ta sẽ ngừng phát triển.
                        </div>
                    </div>
                </div>
                <div class="container-founder--main-gr">
                    <img src="./img/Thuan.jpg" alt="" class="container-founder--main-img">
                    <p class="container-founder--main-name">Dao Huynh Minh Thuan</p>
                    <div class="container-founder--main-content" style="height: 140px;">
                        <div class="container-founder--main-content-heading">
                            <i class="fas fa-quote-left"></i>
                            <h1 class="container-founder--main-content-header">
                                Advice
                            </h1>
                        </div>
                        <div class="container-founder--main-content-text">
                            Học tập và rèn luyện theo tấm gương Chủ tịch Hồ Chí Minh.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-partner">
        <ul class="container-partner--list">
            <li class="container-partner--item">
                <i class="fab fa-amazon"></i>
            </li>
            <li class="container-partner--item">
                <i class="fab fa-apple"></i>
            </li>
            <li class="container-partner--item">
                <i class="fab fa-android"></i>
            </li>
            <li class="container-partner--item">
                <i class="fab fa-battle-net"></i>
            </li>
            <li class="container-partner--item">
                <i class="fab fa-ebay"></i>
            </li>
            <li class="container-partner--item">
                <i class="fab fa-google-plus-g"></i>
            </li>
        </ul>
    </div>
    <footer class="footer">
        <div class="footer-main">
            <div class="footer-about">
                <h1 class="footer-about--header">About US</h1>
                <p class="footer-about--text" style="font-size: 1.6rem;">
                    Chúng tôi xây dựng một nền tảng chia sẽ nhiều kiến thức ở nhiều lĩnh vực khác nhau nhằm tạo nên
                    một
                    cộng đồng
                </p>
                <div class="footer-about--icon" style="font-size: 4rem;">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-github-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-google-plus-square"></i>
                </div>
            </div>
            <div class="footer-about">
                <h1 class="footer-about--header">Information Link</h1>
                <ul class="footer-about--list" style="font-size: 1.6rem;">
                    <li class="footer-about--item">
                        <a href="" class="footer-about--link">Home</a>
                    </li>
                    <li class="footer-about--item">
                        <a href="" class="footer-about--link">About</a>
                    </li>
                    <li class="footer-about--item"><a href="" class="footer-about--link">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="footer-about">
                <h1 class="footer-about--header">Contact Details</h1>
                <ul class="footer-about--list">
                    <li class="footer-about--item">kienthuc@gmail.com</li>
                    <li class="footer-about--item">kienthuc.edu.vn</li>
                    <li class="footer-about--item">UIT ,Ho Chi Minh city</li>
                    <li class="footer-about--item">Kien Thuc fanpage</li>
                </ul>
            </div>
        </div>
    </footer>
    </div>
</body>

</html>