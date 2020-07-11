<?php
$conn = mysqli_connect("localhost", "root", "", "web");
mysqli_set_charset($conn, "utf8");
$monhoc = "js";
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="" href="css/document.css">
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
                        <a href="index.php">home</a>
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
            <p class="logo" >
                <B><?php echo $monhoc ?></B>
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
            <button onclick="egg1()" style="background-color:transparent;border:none;" class="egg egg1">
                <p><img src="./img/egg.png" alt="" height="100"></p>
                <p style="margin:0">
                    <B><?php echo $monhoc ?> Cơ Bản</B>
                </p>
            </button>
            <button onclick="egg2()" style="background-color:transparent;border:none;" class="egg egg2">
                <p><img src="./img/egg3.png" alt="" height="100"></p>
                <p style="margin:0">
                    <B><?php echo $monhoc ?> Trung bình 1</B>
                </p>
            </button>
            <button onclick="egg3()" style="background-color:transparent;border:none;" class="egg egg3">
                <p><img src="./img/egg4.png" alt="" height="103"></p>
                <p style="margin-top:40px">
                    <B><?php echo $monhoc ?> Trung Bình 2</B>
                </p>
            </button>
            <button onclick="egg4()" style="background-color:transparent;border:none;display:flex;" class="egg egg4">
                <p><img src="./img/egg5.png" alt="" height="104"></p>
                <p style="margin:0">
                    <B style="float:left;margin-top:50px;"><?php echo $monhoc ?> Nâng Cao</B>
                </p>
            </button>
            <div class="egg dinoegg">
                <a href="#"><img src="./img/dinoegg.png" alt="" height="104"></a>
                <p style="margin-left: 20px;margin-top: 0">
                    <B>Hoàn Thành </B>
                </p>
            </div>
            <p class="egg title" id="top"><b> <?php echo $monhoc ?> ADVENTURE</b></p>
        </div>
    </div>
    <br id="move1">
    <div>
        <div class="sectionegg">
            <br>
            <div class="sectitle">
                <?php
                echo $monhoc . ' Cơ Bản';
                $level= 'cb';
                ?>
            </div>
            <div class="row1" style="margin-top: 20px">
                <div class="rowsec">
                    <button  class="rowitem" id="modal-btn2" style="color: black;" value="Phan1">
                        <p class="rowitemcon">Phần 1</p>

                    </button>
                    <div class="modal-bg2">
                        <div class="modal2" id="1cbPhan">
                        <?php echo "$result[Phan1]" ?>
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


    </div>
    <script src="../Lab/js/modal.js"></script>





</body>

</html>

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
    function levelmonhoc(monhoc,level){
        $.ajax(
          {
              url : "/Lab/subject.php",
              type : "post",
              dataType : "text",
              data : {
                  code :  monhoc,
                  level: level,
                  part : $('button').val()
              },
              success : function (data) {
                  $('#1cbPhan').html(data);
              }
              
          }
      )
    }
</script>