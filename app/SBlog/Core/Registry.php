<?php

namespace App\SBlog\Core;

class Registry
{
    // используем здесь TSingletone
    use TSingletone;
//    заведём статическое протектед свойство
    protected static $properties = [];
//    далее мы эмулируем паттерн setProperty() хранения состояния, в setProperty() мы можем устанавливать свойства
//    которое будет принимать $name и какое-то значение $value
    public function setProperty($name, $value){
//  которое будет записывать в этот массив $properties с именем (с ключом), эти наши значения
        self::$properties[$name] = $value;
    }
//    теперь мы получим то что записали по этому ключу
    public function getProperty($name){
//        пропишем условие, если self::$properties существует с таким [$name] ключом, то верни нам его
        if (isset(self::$properties[$name])){
            return self::$properties[$name];
        }
//        если его нет, то верни нам null
        return null;
    }
//    и ещё пропишем один метод который будет получать все свойства (которые будут находиться в нём)
        public function getProperties(){
            return self::$properties;
        }
}
