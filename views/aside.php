<!-- боковое меню -->
<aside class="column column3">
    <h2>Каталог</h2>
    <ul>
        <!-- Выводим категрии каталога -->
        <?php
            foreach ($categories as $categoryID => $categoryName) {
                echo "<li><a href="."catalog.php?categoryID=" . $categoryID .">" . $categoryName . " </a></li>";
            }
        ?>
    </ul>
</aside>

