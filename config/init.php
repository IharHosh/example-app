<?php

    // если такой 'ROOT' пер-нной не было то мы создадим такую пер-нную 'ROOT' с таким именем
    // обьявим константу 'ROOT'
    // пример:
//    if (!defined('ROOT')) define('ROOT', dirname(__DIR__));

    // заполним необходимыми константами:

    if (!defined('ROOT')) define('ROOT', dirname(__DIR__));
    if (!defined('WWW')) define('WWW', ROOT . '/public');
    if (!defined('APP')) define('APP', ROOT . '/app');
    if (!defined('CORE')) define('CORE', ROOT . '/resources');
    if (!defined('LIBS')) define('LIBS', ROOT . '/resources/libs');
    if (!defined('CACHE')) define('CACHE', ROOT . '/tmp/cache');
    if (!defined('CONF')) define('CONF', ROOT . '/config');
    if (!defined('LAYOUT')) define('LAYOUT', 'app.blade.php');
    if (!defined('GALLERY')) define('GALLERY', 'public/uploads/gallery');
    if (!defined('IMG')) define('IMG', 'public/uploads/single');

    $host = FALSE;

    if (isset($_SERVER['HTTP_HOST'])) {
        $host = $_SERVER['HTTP_HOST'];
    }
    // http://localhost/index.php
    $allowed_hosts = 'http://localhost/index.php';
    // таким образом если мы в строке url добавим /index.php то ничего не изменится

    // выведем localhost с пом. dd на нашу главную страницу
//    dd($allowed_hosts);
    // Выведет  "http://localhost/index.php"

    $app_path = preg_replace("#[^/]+$#", '', $allowed_hosts);

    $app_path = preg_replace('/public/', '', $app_path);

    // объявим 2 константы
    // в константу 'PATH' объявим переменную $app_path
    if (!defined('PATH')) define('PATH', $app_path);

    // и в константу 'ADMIN' запишем  PATH . 'admin/index'
    if (!defined('ADMIN')) define('ADMIN', PATH . 'admin/index');
    // т.е. здесь будет уже такой путь "http://localhost/index.php/admin/index" если убрать PATH .

