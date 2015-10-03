<!-- боковое меню -->
<aside class="column column3">
    <h2>Каталог</h2>
    <ul>
        <!-- Выводим категрии каталога -->
        <?php
            foreach ($categories as $category) {
                echo "<li><a href=''>" . $category . " </a></li>";
            }
        ?>
    </ul>
</aside>

