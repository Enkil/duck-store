<?php require_once 'config/config.php'; ?>

<?php include_once 'views/head.php'; ?>

<?php include_once 'views/header.php'; ?>

<main>
	<div class="container">
		<div class="banner"></div>
		<div class="row clearfix">

			<!-- боковое меню -->
			<?php include_once 'views/aside.php' ?>

			<div class="column column9">
				<div class="catalog">
					<div class="row clearfix">


                        <!-- элементы каталога -->
                        <?php

                            // Делаем срез массива товаров, выводя на страницу с первого до $itemsOnIndex
                            $itemsOnPage = array_slice($products, 0 , $itemsOnIndex);

                            foreach ($itemsOnPage as $product) {
                                include 'views/_product.php';
                            }

                        ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<? include_once 'views/footer.php';