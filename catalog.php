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
                        <p>Мини - утки</p>
                    </div>
                    <div class="row clearfix">
                        <!-- элементы каталога -->
                        <?php

                        // Делаем срез массива товаров, выводя на страницу с первого до $itemsOnIndex
                        $itemsOnPage = array_slice($products, 0 , $itemsOnCatalog);

                        foreach ($itemsOnPage as $product) {
                            include 'views/_product.php';
                        }

                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<? include_once 'views/footer.php';