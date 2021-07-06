<div class="modal_img">
    <div class="bd"></div>
    <div class="content">
        <i class="fas fa-times-circle" id="close" onclick="close_block_img()"></i>
        <?php
            include("../servises/bd.php");
            $sql_imgs = "SELECT * FROM `product` WHERE id = ".$_GET["id"];
            $query_imgs = mysqli_query($link, $sql_imgs) or die("error " . mysqli_error($link));
            $rows = mysqli_num_rows($query_imgs);
            for($imgs = 0; $imgs < $rows; $imgs++) {
                $product_imgs = $query_imgs->fetch_array();
            }
        ?>
        <img src="../../<?=$product_imgs["link"]; ?>" class="big_photo">
    </div>
</div>