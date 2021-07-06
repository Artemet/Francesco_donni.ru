<?php
    include("../servises/bd.php");
    include("../layout/header.php");
    include("../layout/app.php");
    if ($_SERVER['SCRIPT_FILENAME'] == "C:/xampp/htdocs/francesco.ru/pages/floor.php") {
        $site = 1;
    } else {
        $site = 2;
    }
    //print_r($_SERER['QUERY_STRING']['page']);
    //print_r($_GET['pol']);
?>
    <div class="header_line">
        <h2>
            <?php
                if($site == 1) {
                    if ($_GET['pol'] == "woman") {
                        echo "Женская обувь и одежда";
                        $sex = "woman";
                    } else {
                        $site = 0;
                        echo "Мужская обувь и аксессуары";
                        $sex = "man";
                    }
                }
            ?>
        </h2>
    </div>
    <div class="bottom_part">
        <div class="product">
            <?php
                include("../component/product.php");
            ?>
        </div>
    </div>
<?php
    include("../layout/footer.php");
?>