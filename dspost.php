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
            $post_per_page=6;
            $current_page=$_GET["page"];
            $offset=($current_page-1) * $post_per_page;
            $sql_page="SELECT * FROM post ORDER BY 'PostId' ASC LIMIT $post_per_page OFFSET $offset";
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
                <a type="button" href="postdetail.php?mabaipost=<?php echo $row["PostId"]; ?>" name="phanhoi" class="btn btn-primary">Phản hồi bài viết</a>
            </div> 
        </div>
        <?php
                }
            }
            for($num=1; $num<=$totalpage; $num++)
            {
                echo "<a class='btn btn-primary' style='margin-right:5px' href='dspost.php?page=$num'>$num</a>";
            }
        ?>

    </div>
</body>

</html>