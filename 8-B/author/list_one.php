<?php 

    include "con.php";

    $id = $_GET['id'];

    $list = mysqli_query($kon, "SELECT * FROM tb_author WHERE id = '$id' ORDER BY id DESC");

    $list_one = mysqli_fetch_assoc($list);

    return $list_one;
