<?php require('./controllers/postmn.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/MySubmit.css">
    <script src="https://kit.fontawesome.com/c9801e10cc.js" crossorigin="anonymous"></script>
</head>

<body class="background">
    <div class="content" style="margin : 0 100px">

        <h1 id="title">
            <center> Quản Lí Nội Dung Trang </center>
        </h1>
        <blockquote id="description" style="width:600px">
        </blockquote>
        <table class="table table-bordered table-striped mb-0">
            <thead>
                <tr>
                    <th scope="col">Mã Môn Học</th>
                    <th scope="col">Tiêu Đề</th>
                    <th scope="col">Cơ Bản</th>
                    <th scope="col">Trung Bình 1</th>
                    <th scope="col">Trung Bình 2</th>
                    <th scope="col">Nâng Cao</th>
                    <th scope="col">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost","root","","web");
                $sql = "SELECT * FROM document;";
                mysqli_set_charset($conn, "utf8");
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row["mamh"]; ?></td>
                            <td contenteditable="false"><?php echo $row["tieude"]; ?></td>
                            <td contenteditable="false"><?php echo $row["coban"]; ?></td>
                            <td contenteditable="false"><?php echo $row["trungbinh1"]; ?></td>
                            <td contenteditable="false"><?php echo $row["trungbinh2"]; ?></td>
                            <td contenteditable="false"><?php echo $row["nangcao"]; ?></td>
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
</html>