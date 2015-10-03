<header>
    <div class="container clearfix">
        <!-- логотип -->
        <a href="index.php" class="logo"><?php echo $siteName; ?></a>
        <!-- меню -->
        <nav>
            <ul>
                <?php
                    foreach ($mainNav as $navItem => $navLink) {
                        echo "<li><a href=". $navLink .">" . $navItem . " </a></li>";
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>