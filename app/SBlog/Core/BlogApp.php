<?php

namespace App\SBlog\Core;

class BlogApp
{
    public static $app;
    public static function get_instance()
    {
        self::$app = Registry::instance();
        self::getParams();
        return self::$app;
    }
//    теперь создадим этот метод статический
        protected static function getParams()
        {
//      Здесь объявим переменную $params в которую мы поместим require с константой CONF и укажем путь к ф-лу который
//      ранее создавали '/params.php'
            $params = require CONF . '/params.php';
//      если в $params не пусто
            if (!empty($params)){
//      то пройдёмся массивом по нему
//      как ключ $k и значение $v
                foreach ($params as $k => $v){
//      и положим в наше свойство (в патерн хранения состояния) эти $k и $v
                    self::$app->setProperty($k, $v);
                }
            }

        }
}
