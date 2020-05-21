<?php 

    include "con.php"; 
    include "author/list.php";

    // var_dump($list);die;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/custom.css">

    <title>Dumbways Course</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Dumbways Course</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Content</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Course </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Author</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline- my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Author</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </nav>
    </div>

    <div class="container section">
        <h2 class="text-center">Data Author</h2>
        <hr>
        <a href="tambah data" class="btn btn-primary btn-large">Tambah Data</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name Author</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                if( mysqli_num_rows($list) > 0 ){ 
                    $no = 1;
                    while( $data = mysqli_fetch_array($list) ){
            ?>
                <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <th><?php echo $data['name'] ?></th>
                    <td>Todo</td>
                </tr>
            <?php
                    $no++; } 
                } 
            ?>
            </tbody>
        </table>
    </div>

    <script src="dist/js/jquery-3.4.1.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

</body>

</html>