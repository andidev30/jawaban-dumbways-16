<?php 

    // include "con.php"; 
    include "author/list_one.php";

    // var_dump($list_one);die;

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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="content.php">Content</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="course.php">Course </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="author.php">Author <span class="sr-only">(current)</span></a>
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
                <li class="breadcrumb-item"><a href="author.php">Author</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>

    <div class="container section">
        <form method="post" action="author/edit.php">
            <fieldset>
                <legend>Edit Author</legend>
                <br>
                <div class="form-group row">
                    
                    <input type="hidden" name="id" id="inputid" class="form-control" value="<?php echo $list_one['id'] ?>">
                    
                    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputname" placeholder="Name" value="<?php echo $list_one['name'] ?>">
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-primary btn-large">Save</button>
                <a href="author.php" class="btn btn-danger btn-large">Cancel</a>
            </fieldset>
        </form>
    </div>

    <script src="dist/js/jquery-3.4.1.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

</body>

</html>