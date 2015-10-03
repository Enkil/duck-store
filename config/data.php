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
$categories = array(
    'mini' => 'Маленькие уточки',
    'motors' => 'Утки с моторчиком',
    'underwater' => 'Подводные уточки',
    'craft' => 'Уточки ручной работы',
    'speaking' => 'Говорящие уточки',
);

// Products array
$products = array(
    '1' => array(
        'id' => 1,
        'title' => 'Мини-утка брелок',
        'price' => '990',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'categoryID' => 'mini',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '2' => array(
        'id' => 2,
        'title' => 'Утка с моторчиком',
        'price' => '199',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'categoryID' => 'mini',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '3' => array(
        'id' => 3,
        'title' => 'Утка без моторчика',
        'price' => '929',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Маленькие уточки',
        'categoryID' => 'mini',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '4' => array(
        'id' => 4,
        'title' => 'Ручная уточка',
        'price' => '2299',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Утки с моторчиком',
        'categoryID' => 'motors',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '5' => array(
        'id' => 5,
        'title' => 'Дикое утище',
        'price' => '939',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Утки с моторчиком',
        'categoryID' => 'motors',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '6' => array(
        'id' => 6,
        'title' => 'Утка в желтом',
        'price' => '9349',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Утки с моторчиком',
        'categoryID' => 'motors',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '7' => array(
        'id' => 7,
        'title' => 'Утенок',
        'price' => '9119',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Подводные уточки',
        'categoryID' => 'underwater',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '8' => array(
        'id' => 8,
        'title' => 'Пришелец из космоса',
        'price' => '1299',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Подводные уточки',
        'categoryID' => 'underwater',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '9' => array(
        'id' => 9,
        'title' => 'Утка ?',
        'price' => '9955',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Подводные уточки',
        'categoryID' => 'underwater',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '10' => array(
        'id' => 10,
        'title' => 'И снова утки',
        'price' => '939',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Уточки ручной работы',
        'categoryID' => 'craft',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '11' => array(
        'id' => 11,
        'title' => 'Утка eins zwei drei',
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Уточки ручной работы',
        'categoryID' => 'craft',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '12' => array(
        'id' => 12,
        'title' => 'Overmind утка',
        'price' => '949',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Уточки ручной работы',
        'categoryID' => 'craft',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
    '13' => array(
        'id' => 13,
        'title' => 'Нужно больше уточек',
        'price' => '99',
        'caption' => '<strong>Резиновая уточка</strong>> — игрушка в виде утки, как правило, жёлтого цвета. Она может быть сделана из резины или из пенопласта. Жёлтая резиновая уточка стала ассоциироваться с купаньем.',
        'category' => 'Говорящие уточки',
        'categoryID' => 'speaking',
        'mainImage' => 'front-end/img/item.jpeg',
        'images' => ['front-end/img/item.jpeg', 'front-end/img/item.jpeg', 'front-end/img/item.jpeg']
    ),
);