<?php
function __autoload($class){

    $class = str_replace('\\','/',$class).'.php';
    var_dump($class);
    require_once $class;
    /*if(file_exists(__DIR__.'/app/controllers/'.$class.'.php')){
        require_once __DIR__.'/app/controllers/'.$class.'.php';
    }elseif(file_exists(__DIR__.'/app/models/'.$class.'.php')) {
        require_once __DIR__ . '/app/models/' . $class . '.php';
    }elseif(file_exists(__DIR__.'/app/views/'.$class.'.php')){
        require_once __DIR__ . '/app/views/' . $class . '.php';
    }elseif(file_exists(__DIR__.'/app/classes/'.$class.'.php')){
        require_once __DIR__ . '/app/classes/' . $class . '.php';
    }*/
}