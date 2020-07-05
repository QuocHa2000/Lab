<?php 
    $conn = mysqli_connect("localhost","root","","web");
    mysqli_set_charset($conn,"utf8");
    if (isset($_GET['subject'])){
        $monhoc = $_GET['subject'];
        $sql = "SELECT * FROM document WHERE document.mamh= '$monhoc';";
        $result = $conn->query($sql)->fetch_assoc();
    
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="" href="./css/anhvan.css">
    <title>Document</title>
    <style>
        .sticky {
            position: fixed;
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
</head>

<body>
    <div class="header" id="header">
        <div class="item1">
            <div id="content">
                <span class="slide">
                    <a href="#" onclick="openSlideMenu()">
                        <img src="./img/navigation icon@2x.png" alt="" height="40px"
                            style="margin-top:6px ;margin-left: 4px">
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
                        <a href="index.php">home</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/bookicon.png" alt="" height="50px">
                        <a href="document.php?subject=english">Tiếng Anh</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/Science-Math-icon.png" alt="" height="50px">
                        <a href="document.php?subject=js">Javascripts</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/pngwing.com.png" alt="" height="50px">
                        <a href="document.php?subject=css">Css</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/chemistry.png" alt="" height="50px">
                        <a href="document.php?subject=html">HTML</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/bookicon.png" alt="" height="50px">
                        <a href="document.php?subject=nodejs">Nodejs</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/htmlicon.png" alt="" height="50px">
                        <a href="document.php?subject=php">PHP</a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/bookicon.png" alt="" height="50px">
                        <a href="document.php?subject=toan">Toán </a>
                    </div>
                    <div style="display: flex;margin-top: 15px;margin-left: 20px">
                        <img src="./img/cssicon.png" alt="" height="50px">
                        <a href="document.php?subject=vatli">Vật Lí</a>
                    </div>
                </div>
            </div>

            <img src="./img/testlogo1@2x.png" alt="logo" height="60" class="navicon">
        </div>
        <div class="item2">
            <p class="logo">
                <B>ENGLISH</B>
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
    </div>
    <div class="map">
        <div class="innermap">
            <img src="./img/pngfuel.com.png" alt="mappp" height="1000">
            <div class="egg egg1">
                <a href="#"><img src="./img/egg.png" alt="" height="100"></a>
                <p style="margin:0">
                    <B>Grammar basic</B>
                </p>
            </div>
            <div class="egg egg2">
                <a href="#"><img src="./img/egg3.png" alt="" height="100"></a>
                <p style="margin:0">
                    <B>Grammar basic 2</B>
                </p>
            </div>
            <div class="egg egg3">
                <a href="#"><img src="./img/egg4.png" alt="" height="103"></a>
                <p style="margin-top:40px">
                    <B>Grammar basic 2</B>
                </p>
            </div>
            <div class="egg egg4">
                <a href="#"><img src="./img/egg5.png" alt="" height="104"></a>
                <p style="margin:0">
                    <B>Grammar basic</B>
                </p>
            </div>
            <div class="egg dinoegg">
                <a href="#"><img src="./img/dinoegg.png" alt="" height="104"></a>
                <p style="margin-left: 20px;margin-top: 0">
                    <B>finish line</B>
                </p>
            </div>
            <p class="egg title"><b>ENGLISH ADVENTURE</b></p>
        </div>
    </div>
    <div class="">
        <div class="sectionegg">
            <br>
            <div class="sectitle">
                <?php
                    echo "$result[tieude]";
                ?>
            </div>
            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <a class="rowitem" id="modal-btn2">
                        <p class="rowitemcon">Basic</p>

                    </a>
                    <div class="modal-bg2">
                        <div class="modal2"> <?php echo "$result[coban]"?>
                            <div id="close2">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>
                    <button style="margin: auto;">baitap</button>
                </div>
                <div class="rowsec">
                    <a class="rowitem" id="modal-btn3">
                        <p class="rowitemcon">Intermediate 1</p>
                    </a>
                    <div class="modal-bg3">
                        <div class="modal3"><?php echo "$result[trungbinh1]" ?>
                            <div id="close3">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>
                    <button style="margin: auto;">baitap</button>
                </div>
            </div>

            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <a class="rowitem" id="modal-btn4">
                        <p class="rowitemcon">Intermediate 2</p>
                    </a>
                    <div class="modal-bg4">
                        <div class="modal4"><?php echo "$result[trungbinh2]" ?>
                            <div id="close4">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>
                    <button style="margin: auto;">baitap</button>
                </div>
                <div class="rowsec">
                    <a class="rowitem" id="modal-btn5">
                        <p class="rowitemcon">Advance</p>
                    </a>
                    <div class="modal-bg5">
                        <div class="modal5"><?php echo "$result[nangcao]" ?>
                            <div id="close5">
                                <a style="text-decoration: none;"></a>+</div>
                        </div>

                    </div>
                    <br>
                    <button style="margin: auto;">baitap</button>
                </div>
            </div>
            <a href="#" style="text-decoration: none;" class="backbutton">
                <p style="margin-top: 15px">Back to the top</p>
            </a>
        </div>

    </div>

    <div class="test">
        <P style="margin-right: 60px">Confident ? Let's have a little test shall we! </P>
        <button id="modal-btn" class="button">
            TEST
        </button>
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
    <script src="../Lab/js/modal.js"></script>








</body>

</html>
        <?php }?>