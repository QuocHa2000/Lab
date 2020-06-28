<?php 
    $connect = new mysqli("localhost","root","","");


    if(isset($_POST["submit"])){
        $author = $_POST["authorname"];
        $emailauthor = $_POST["email"];
        $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

        $tname = $_FILES["files"]["tmp_name"];
        $upload_dir = '/images';
        move_uploaded_file($tname,$upload_dir."/".$pname);
        $sql = "INSERT INTO dtbName ('','','') VALUES ('','','') ;"; 

        if($connect->query($sql)){
            echo "Uploading file success";
        }else{
            die("Fail to upload file");
        }
    }
    $connect->close();
?>