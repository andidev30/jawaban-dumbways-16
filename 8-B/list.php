<?php 

    include "con.php";

    $query = " SELECT tb_content.name as name_content, tb_course.thumbnail, tb_course.duration, tb_course.description, tb_author.name as name_author from tb_content left join tb_course on tb_content.id_course = tb_course.id left join tb_author on tb_course.id_author = tb_author.id ";

    $list = mysqli_query($kon, $query);
    // var_dump($query);
    // var_dump($list);die;
    

    return $list;
