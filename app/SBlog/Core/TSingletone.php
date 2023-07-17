<?php

namespace App\SBlog\Core;

trait TSingletone
{
//    создадим "синглтон"
    private static $instance;
    public static function instance(){
//        если здесь пусто,
        if (self::$instance === null){
//            то сюда поместим экземпляр этого класса
            self::$instance = new self;
        }
//        и вернём его же
        return self::$instance;
    }
}
