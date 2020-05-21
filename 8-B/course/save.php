<?php 

    include '../con.php';

    $name = $_POST['name'];
    $id_author = $_POST['id_author'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];

    $ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
    $nama = $_FILES['thumbnail']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];	

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){			
            move_uploaded_file($file_tmp, 'image/'.$nama);
            $query = "INSERT INTO tb_course VALUES(NULL, '$name', '$nama', '$id_author', '$duration', '$description')";
            $insert = mysqli_query($kon, $query);
            if($insert){
                // echo 'FILE BERHASIL DI UPLOAD';
                echo "<script>alert('Success add')</script>";
                header("location: ../course.php");
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
