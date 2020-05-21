<?php 

    include "../con.php";

    // var_dump($_POST);
    $name = htmlspecialchars($_POST['name']);
    $video_link = htmlspecialchars($_POST['video_link']);
    $type = htmlspecialchars($_POST['type']);
    $id_course = htmlspecialchars($_POST['id_course']);

    $insert = mysqli_query($kon, " INSERT INTO tb_content values ( NULL, '$name', '$video_link', '$type', '$id_course' ) ");

    if($insert){
        echo "<script>alert('Author Success Add')</script>";
        header("location: ../content.php");
    }else{
        // mysqli_connect_error();
        mysqli_error($kon);
    }
