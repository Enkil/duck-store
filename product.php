<?php require_once 'config/config.php'; ?>

<?php include_once 'views/head.php'; ?>

<?php include_once 'views/header.php'; ?>


<!-- Определяем ID товара. Если такой id есть, то заполняем карточку, если нет - редирект на страницу каталога -->
<?php
if (!empty($_GET["productID"]) && array_key_exists($_GET["productID"], $products)) { // проверяем не пустой ли &_GET и есть ли в массиве такой ключ
    $product = $products[$_GET["productID"]];
} else {
    header("Location: /catalog.php");
    die();
}
?>

<section>
    <div class="container">
        <div class="row clearfix">

            <!-- боковое меню -->
            <?php include_once 'views/aside.php' ?>

            <div class="catalog column column9">

                <div class="order-status ">
                    <div class="row clearfix">
                        <p>Товар "<?php echo $product["title"]; ?>" добавлен в корзину</p>
                        <a href="" class="order-status-btn-basket">В Корзину</a>
                    </div>
                </div>

                <!-- хлебные крошки -->
                <div class="breadcrumbs item-breadcrumbs">
                    <a href="index.php">Магазин</a>
                    <a href="catalog.php?categoryID=<?php echo $product["categoryID"]; ?>"><?php echo $product["category"]; ?></a>
                    <p><?php echo $product["title"]; ?></p>
                </div>

                <!-- Товар -->
                <div class=" row clearfix item-heading">
                    <!-- название товара -->
                    <h1 class="item-name column column6"><?php echo $product["title"]; ?></h1>
                    <!-- цена -->
                    <p class="price column column6"><?php echo $product["price"]; ?> P</p>
                </div>
                <div class="row clearfix">
                    <div class="column column6">
                        <!-- галерея картинок -->
                        <div class="item-gallery">
                            <img src="<?php echo $product['mainImage']  ?>" alt="уточка">
                            <div class="small-images">
                                <!-- Выводим картинки -->
                                <?php
                                    foreach ($product['images'] as $image) {
                                        echo '<img src="'.$image.'" alt="Уточка">';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="column column6">
                        <!-- описание -->
                        <p class="item-description">
                            <?php echo $product["caption"]; ?>
                        </p>
                        <!-- цена -->
                        <p class="price"><?php echo $product["price"]; ?> P</p>
                        <div class="order-btns">
                            <a href="" class="btn-basket">В Корзину</a>
                            <a href="" class="btn-click">Купить в 1 клик</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include_once 'views/footer.php';