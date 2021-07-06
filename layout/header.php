<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;800&family=Roboto&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../res/icon/francesco.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!--    <link rel="stylesheet" href="reset.css">-->
    <script src="https://kit.fontawesome.com/0f597b3186.js" crossorigin="anonymous"></script>
    <?php
    $test = $_SERVER['PHP_SELF'];

    $directory_name = '';
    if ($_SERVER['SCRIPT_NAME'] == '/francesco.ru/pages/floor.php') {
        $directory_name = '../';
    }

    ?>
    <link rel="stylesheet" href="<?=$directory_name?>css/style.css">
    <link rel="icon" href="<?=$directory_name?>res/icon/francesco.png">
    <link rel="icon" href="<?=$directory_name?>res/icon/francesco.png">
    <link rel="stylesheet" href="<?=$directory_name?>css/modal.css">
    <link rel="stylesheet" href="<?=$directory_name?>css/message.css">
    <link rel="stylesheet" href="<?=$directory_name?>css/in_message.css">
    <link rel="stylesheet" href="<?=$directory_name?>css/product_window.css">
    <link rel="stylesheet" href="<?=$directory_name?>css/modal_waring.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интернет-магазин "Франческо донни"</title>
</head>
<body>
