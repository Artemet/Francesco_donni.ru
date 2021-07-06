<div>
    <link rel="stylesheet" href="../css/style.css">
    <?php
    include("products_elements/product_choice_line.php");
    ?>
    <div class="cardList" id="cardList" onmouseleave="card_list_leave()" onmouseover="card_list_in()">
        <?php
        if ($site == 0) {
            $pages = ($_GET['page'] - 1) * 6;
            $sql = "SELECT * FROM product where sex = 0 LIMIT $pages, 6";
        } elseif ($site == 1) {
            $pages = ($_GET['page'] - 1) * 6;
            $sql = "SELECT * FROM product where sex = 1 LIMIT $pages, 6";
        } else {
            $sql = "SELECT * FROM product";
        }
        $resolt = mysqli_query($link, $sql) or die("error " . mysqli_error($link));
        if ($resolt) {
            $rows = mysqli_num_rows($resolt);
            if ($rows > 8) {
                $rows = 8;
            }
            for ($i = 0; $i < $rows; $i++) {
                $row = mysqli_fetch_array($resolt);
                $sql_img = "SELECT * FROM imgs where product_id=" . $row["id"];

                $resolt_imgs = mysqli_query($link, $sql_img) or die("error " . mysqli_error($link));
                $card_arr_img = [];
                for ($circle = 0; $circle < $resolt_imgs->num_rows; $circle++) {
                    $card_arr_img[] = mysqli_fetch_array($resolt_imgs);
                }

                //print_r($rows['id']);
                echo "<div href='http://localhost/francesco.ru/component/in_product.php' class='card'>";
                echo "<div class='card_hide'>";
                echo "<span class=\"description_hit\">Hit</span>";
                echo "<span class=\"description_new\">New</span>";
                if (count($card_arr_img) == 0) {
                    $card_arr_img[0]['link'] = "res/product_img/error.jpg";
                }
                ?>
                <a href="<?= $directory_name ?>pages/in_product.php/?id=<?=$row["id"] ?>">
                    <img src="<?= $directory_name ?><?= $card_arr_img[0]["link"] ?>" id="product_img<?= $i ?>"
                         onclick="product_slider_img()" class="product_img">
                </a>
                <?php
                echo "<div class=\"link_list\">";
                for ($circle = 0; $circle < $resolt_imgs->num_rows; $circle++) {
                    echo "<i class='fas fa-circle button_list' onclick='chenk_img($circle, $i)' data-img='" . json_encode($card_arr_img[$circle]['link']) . "'></i>";
                }
                echo "</div>";
                echo "<p style=\"font-family: Roboto, sans-serif;\">" . $row["name"] . "</p>";
                echo "<span class='price'>" . ($row["price"] / $row["sale"]) . " руб</span>";
                echo "<span class='sale'>" . -$row["sale"] . "%</span>";
                echo "<s>" . $row["price"] . "%</s>";
                echo "<div class='more_information active_information'>";
                echo "<p class='collection'>Коллекция</p>";
                echo "<p class='time_season'>" . $row["time_season"] . "</p>";
                echo "<h3 class='product_size'>Размер для обуви</h3>";
                echo "<button class='size'>" . $row["size"] . "</button>";
                echo "<button class='basket' onclick='go_basket()'>В корзину</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        }
        //close
        ?>
    </div>
    <div class="pages_list">
        <?php
        $sql = "SELECT * FROM product where sex = $site";
        $resolt = mysqli_query($link, $sql) or die("error " . mysqli_error($link));
        $bd_data = [];
        if ($resolt) {
            $rows = mysqli_num_rows($resolt);
            for ($i = 0; $i < $rows; $i++) {
                $row = mysqli_fetch_array($resolt);
                $bd_data[] = $row;
            }
        }
        if ($site != 3) {
            if ($_GET["page"] != 1) {
                echo "<a href='http://localhost/francesco.ru/pages/floor.php?pol=$sex&page=" . ($_GET["page"] - 1) . "'><i class='fas fa-arrow-left arrow'></i></a>";
            } elseif ($_GET["page"] != 2) {
                echo "<a href='http://localhost/francesco.ru/pages/floor.php?pol=$sex&page=" . ($_GET["page"] + 1) . "'><i class='fas fa-arrow-right arrow'></i></a>";
            }
            for ($i = 0; $i < ceil(count($bd_data) / 6); $i++) {
                echo "<a href='http://localhost/francesco.ru/pages/floor.php?pol=$sex&page=" . ($i + 1) . "'>" . ($i + 1) . "</a>";
            }
        }

        ?>
    </div>
    <?php
    if ($site == 0) {
        echo "<div class='products_text'>";
        echo "<p>В интернет - магазине Francesco Donni (Москва) представлены коллекции женской одежды, обуви и аксессуаров известных брендов. Современным модницам предлагаем широкий выбор товаров высокого класса с возможностью совмещать с базовыми вещами по доступным ценам. В каталоге «Одежда» представлены следующие группы товаров:</p>";
        echo "</div>";
    }
    ?>
</div>