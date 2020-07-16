<?php
    require "controllers/config.php";
    require "controllers/header.php";
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
<style>
    .nav-heading {
        font-size: 1.7rem;
    }
    .heading{
        height: 70px;
    }
    .container{
        text-align:left;
    }
    body{
        font-size: 2.0rem;
    }
    .icon{
        position: relative;
    }
</style>
<body>
    
    <div class="container">
        <div>
            <h1 class="h1" style="padding-top:100px; font-size:3rem ">Danh sách các bài viết</h1>
            <span class="icon"><a href="post.php"><i class="fas fa-pen" style="font-size: 3rem; color : #eea412;"></i>Click vào đây để đăng bài</a><i></i></span>
        </div>
        <?php
            $post_per_page=6;
            $current_page=!empty($_GET["page"])?$_GET["page"]:1;
            $offset=($current_page-1) * $post_per_page;
            $sql_page="SELECT * FROM post ORDER BY 'PostId' DESC LIMIT $post_per_page OFFSET $offset";
            $query_page=mysqli_query($conn, $sql_page);
            $total="SELECT * FROM post";
            $totalpost=mysqli_query($conn, $total);
            $totalpost=$totalpost->num_rows;
            $totalpage=ceil($totalpost/$post_per_page);
            if($query_page->num_rows>0)
            {
                $count=0;
                while($row=mysqli_fetch_assoc($query_page))
                {
                    $count ++;

        ?>
        <div class="card">
            <div class="card-header">
            <p><?php echo $row["NguoiPost"]; ?>: <span><strong><?php echo $row["TieuDe"]; ?></strong></span></p>
            </div>
            <div class="card-body">
                <p><?php echo $row["NoiDung"]; ?></p>
                <a style="font-size: 1.5rem;" type="button" href="postdetail.php?mabaipost=<?php echo $row["PostId"]; ?>" name="phanhoi" class="btn btn-primary">Phản hồi bài viết</a>
            </div> 
        </div>
        <?php
                }
            }
            for($num=1; $num<=$totalpage; $num++)
            {
                echo "<a class='btn btn-primary' style='margin-right:5px; font-size:1.5rem; margin-bottom:10px' href='dspost.php?page=$num'>$num</a>";
            }
        ?>

    </div>
</body>
<script src="./js/home.js"></script>
</html>