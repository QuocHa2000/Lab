<?php
    require "controllers/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dspost.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            <h1 class="h1">Danh sách các bài viết</h1>
        </div>
        <?php
            $sql="SELECT * FROM post LIMIT 100";
            $query=mysqli_query($conn, $sql);
            $pro_per_page = 12;
            $num_of_product = mysqli_num_rows($query);
            $num_page = ceil($num_of_product/ $pro_per_page);
            if(!isset($_GET['page'])){
                $page=1;
            }else{
                $page=$_GET['page'];
            };
            $start_from = ($page-1)*$pro_per_page;
            if ($page==$num_page){
                $pro_per_page=(100%$pro_per_page);
            };
            $strSQL = "SELECT * FROM products LIMIT $start_from,$pro_per_page;";
            $result=$conn->query($strSQL);
        
            if($query->num_rows>0)
            {
                $count=0;
                while($row=mysqli_fetch_assoc($query))
                {
                    $count ++;

        ?>
        <div class="card">
            <div class="card-header">
            <p><?php echo $row["NguoiPost"]; ?>: <span><strong><?php echo $row["TieuDe"]; ?></strong></span></p>
            </div>
            <div class="card-body">
                <p><?php echo $row["NoiDung"]; ?></p>
                <button type="button" class="btn btn-primary">Phản hồi bài viết</button>
            </div> 
        </div>
        <?php
                }
            }
            for($page=1;$page<=$num_page;$page++){
                echo "<a class='btn btn-primary' href='dspost.php?page=$page'>$page</a>";
            }
        ?>
    </div>
</body>

</html>