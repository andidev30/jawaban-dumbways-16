<?php 

    include "../con.php";

    // var_dump($_GET);die;
    $id = $_GET['id'];

    $delete = mysqli_query($kon, "DELETE FROM tb_author WHERE id = '$id' ");

    if ($delete) {
        echo "<script>alert('Success Deleted')</script>";
        header("location: ../author.php");
    }else{
        // mysqli_connect_error();
        mysqli_error($kon);
    }
    