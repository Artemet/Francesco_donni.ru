<?php
    $host_name = "localhost";
    $user_name = "root";
    $data_base = "francescodonni";
    $password = "";
    $sql = "";
    $link = mysqli_connect($host_name,$user_name,$password,$data_base) or die("error ". mysqli_error($link));
?>