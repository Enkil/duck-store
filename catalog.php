<?php require_once 'config/config.php'; ?>

<?php include_once 'views/head.php'; ?>

<?php include_once 'views/header.php'; ?>

<section>
    <div class="container">
        <div class="row clearfix">
            <!-- боковое меню -->

            <?php include_once 'views/aside.php' ?>

            <div class="column column9">
                <div class="catalog">

                    <!-- хлебные крошки -->
                    <div class="breadcrumbs">
                        <a href="index.html">Магазин</a>
                        <p>
                            <!-- Определяем ID категории и выводим ее название -->
                            <?php
                                if (!empty($_GET["categoryID"]) && array_key_exists($_GET["categoryID"], $categories)) { // проверяем не пустой ли &_GET и есть ли в массиве такой ключ
                                    echo $categories[$_GET["categoryID"]];
                                } else {
                                    echo 'Каталог';
                                }
                            ?>
                        </p>
                    </div>

                    <div class="row clearfix">
                        <!-- элементы каталога -->
                        <?php

                            // Делаем срез массива товаров, выводя на страницу с первого до $itemsOnIndex
                            $itemsOnPage = array_slice($products, 0 , $itemsOnCatalog);

                            // Проверяем не переходили ли это по ссылке на категорию и есть ли такая категория
                            // если такой категории нет (нет ключа в массиве) или в категорию не переходили, то отдаем весь каталог
                            if (!empty($_GET["categoryID"]) && array_key_exists($_GET["categoryID"], $categories)) {
                                // выводим только товары из категории
                                foreach ($itemsOnPage as $product) {
                                    if (in_array($_GET["categoryID"],$product, true)) {
                                        include 'views/_product.php';
                                    }
                                }
                            }
                            else {
                                foreach ($itemsOnPage as $product) {
                                    include 'views/_product.php';
                                }
                            }

                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'views/footer.php';