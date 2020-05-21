<?php 

    include "../con.php";

    // var_dump($_POST);
    $name = htmlspecialchars($_POST['name']);

    $insert = mysqli_query($kon, " INSERT INTO tb_author values ( NULL, '$name' ) ");

    if($insert){
        echo "<script>alert('Author Success Add')</script>";
        header("location: ../author.php");
    }else{
        // mysqli_connect_error();
        mysqli_error($kon);
    }
