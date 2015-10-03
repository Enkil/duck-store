<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);

    mb_internal_encoding("UTF-8");
    require_once 'data.php';

    $itemsOnIndex = 6; // количество товаров на главной
    $itemsOnCatalog = 16; // количество товаров на странице каталога