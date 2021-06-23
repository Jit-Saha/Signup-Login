<?php
    $con = mysqli_connect("localhost","root","","yt_tuto");
    if(!$con){
        die("Connection failed".mysqli_connect_server());
    }
    echo '<script>console.log("DB Connection successful.....")</script>';
?>