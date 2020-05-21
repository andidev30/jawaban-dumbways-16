<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "test_dumbways_16";

    $kon = mysqli_connect($servername, $username, $password,  $db);

    if (!$kon) {
      die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";

?>