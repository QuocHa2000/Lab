<?php require('./controllers/postmn.php');
require('./controllers/postquanli.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/MySubmit.css">
    <script src="https://kit.fontawesome.com/c9801e10cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body class="background">
    <div class="content" style="margin : 0 100px">

        <h1 id="title">
            <center> Quản Lí Nội Dung Trang </center>
        </h1>
        <blockquote id="description" style="width:600px">
        </blockquote>
        <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal">
            Add New Document
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="padding: 0 8px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mã Môn Học</label>
                            <input  name="mamh" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleFormControlInput1">Tên Môn Học</label>
                            <input type="email" name="tenmh" class="form-control" id="exampleFormControlInput1">
                        </div> -->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Phần 1</label>
                            <textarea class="form-control" name="phan1" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Phần 2</label>
                            <textarea class="form-control" name="phan2" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Phần 3</label>
                            <textarea class="form-control" name="phan3" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Phần 4</label>
                            <textarea class="form-control" name="phan4" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mã Level</label>
                            <input  name="malv" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-striped mb-0">
            <thead>
                <tr>
                    <th scope="col">Mã Môn Học</th>
                    <th scope="col">Cơ Bản</th>
                    <th scope="col">Trung Bình 1</th>
                    <th scope="col">Trung Bình 2</th>
                    <th scope="col">Nâng Cao</th>
                    <th scope="col">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "web");
                $sql = "SELECT * FROM document;";
                mysqli_set_charset($conn, "utf8");
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row["mamh"]; ?></td>
                            <td contenteditable="false"><?php echo $row["phan1"]; ?></td>
                            <td contenteditable="false"><?php echo $row["phan2"]; ?></td>
                            <td contenteditable="false"><?php echo $row["phan3"]; ?></td>
                            <td contenteditable="false"><?php echo $row["phan4"]; ?></td>
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
<!-- <script src="./js/managedoc.js"></script> -->
<script>
</script>

</html>