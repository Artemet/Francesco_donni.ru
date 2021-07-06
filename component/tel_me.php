<?php
    require_once('connect.php');
   $name = $_POST['name'];
   $phone = $_POST['phone'];
    $sql = "INSERT INTO `tel_me` (`id`, `name`, `phone`) VALUES (NULL, '$name', '$phone')";
    mysqli_query($link, $sql)
?>