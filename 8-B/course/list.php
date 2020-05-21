<?php 

    include "con.php";

    $list = mysqli_query($kon, "SELECT * FROM tb_course ORDER BY id DESC");

    return $list;
