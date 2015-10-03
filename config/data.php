<?php

// Site name
$siteName = 'DuckStore';

// Main navigation
$mainNav = array(
    'О Компании' => '/',
    'Каталог' => '/catalog.php',
    'Доставка и оплата' => '',
    'Контакты' => ''
);

// Product categories array
$categories = ['Маленькие уточки', 'Утки с моторчиком', 'Подводные уточки', 'Уточки ручной работы', 'Говорящие уточки'];

// Products array
$products = array(
    'Мини-утка брелок' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Утка с моторчиком' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Утка без моторчика' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Ручная уточка' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Дикое утище' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Утка в желтом' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Утенок' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Пришелец из космоса' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Утка ?' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'И снова утки' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Утка eins zwei drei' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Overmind утка' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    'Нужно больше уточек' => array(
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
);