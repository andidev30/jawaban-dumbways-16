<?php include "list.php"; ?>

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
                        <a class="nav-link" href="home.hp">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="content.php">Content</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="course.php">Course </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="author.php">Author</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline- my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container section">
        <h2 class="text-center">
            Topik Pembelajaran Terbaru
        </h2>
        <hr><br>
        <div class="row col-md">
            <?php 
                if( mysqli_num_rows($list) > 0 ){ 
                    while( $data = mysqli_fetch_array($list) ){
            ?>
                <div class="card mr-2 mt-2" style="width: 18rem;">
                    <img class="card-img-top" src="course/image/<?php echo $data['thumbnail'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['name_content'] ?></h5>
                        <p class="card-text"><?php echo $data['description'] ?></p>
                        <i class="card-text">Author : <?php echo $data['name_author'] ?></i><br>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
                <?php
                    } 
                } 
            ?>
        </div>
    </div>

        <script src="dist/js/jquery-3.4.1.min.js"></script>
        <script src="dist/js/popper.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>

</body>

</html>