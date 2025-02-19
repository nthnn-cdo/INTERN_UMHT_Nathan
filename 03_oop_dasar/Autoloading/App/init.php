<?php

// require_once 'Makan/infomakan.php';
// require_once 'Makan/Makan.php';
// require_once 'Makan/list1.php';
// require_once 'Makan/list2.php';
// require_once 'Makan/cetakinfomakan.php';


spl_autoload_register(function($class){
    require_once __DIR__ . '/Makanan/'. $class . '.php';
});