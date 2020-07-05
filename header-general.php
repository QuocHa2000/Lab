<?php
    session_start();
?>
<head>
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./font/fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<header class="heading">
        <div class="logo-heading">
            <img src="./img/Logo.png" alt="">
        </div>
        <div class="nav-heading">
            <ul class="nav-heading--list">
                <li class="nav-heading--item">
                    <a href="home.php" class="nav-heading--item-link">
                        Home
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="AboutUs.php" class="nav-heading--item-link">
                        About us
                    </a>
                </li>
                <li class="nav-heading--item" id="document">
                    <a href="" class="nav-heading--item-link">
                        Document
                    </a>
                    <ul class="document-list">
                        <li class="document-item">Tiếng Anh</li>
                        <li class="document-item">Javascripts</li>
                        <li class="document-item">Css</li>
                        <li class="document-item">Html</li>
                        <li class="document-item">Nodejs</li>
                        <li class="document-item">PHP</li>
                    </ul>
                </li>
                <li class="nav-heading--item">
                    <a href="" class="nav-heading--item-link">
                        Exercises
                    </a>
                </li>
                <li class="nav-heading--item">
                    <a href="gopy-lienhe.php" class="nav-heading--item-link">
                        Contact
                    </a>
                </li>
                <?php if (!isset($_SESSION["login"])) : ?>
                    <li class="nav-heading--item">
                        <a href="login.php" class="nav-heading--item-link">
                            Login
                        </a>
                    </li>
                    <li class="nav-heading--item">
                        <a href="register.php" class="nav-heading--item-link">
                            Register
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
    </header>