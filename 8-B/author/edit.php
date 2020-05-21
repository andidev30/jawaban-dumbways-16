<?php 

    include "../con.php";

    // var_dump($_POST);
    $name = htmlspecialchars($_POST['name']);
    $id = htmlspecialchars($_POST['id']);

    $query = " UPDATE tb_author SET name = '$name' WHERE id = '$id' ";
    $edit = mysqli_query($kon, $query);

    if($edit){
        echo "<script>alert('Author Success Add')</script>";
        header("location: ../author.php");
    }else{
        // mysqli_connect_error();
        echo "error";
        var_dump($query);
        mysqli_error($kon);
    }
