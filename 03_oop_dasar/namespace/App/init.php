<?php

// require_once 'Makanan/infomakan.php';
// require_once 'Makanan/Makan.php';
// require_once 'Makanan/list1.php';
// require_once 'Makanan/list2.php';
// require_once 'Makanan/cetakinfomakan.php';
// require_once 'Makanan/User.php';

// require_once 'Service/User.php';


spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Makanan/'. $class . '.php';
});

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/'. $class . '.php';
});