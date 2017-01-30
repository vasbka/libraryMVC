<?php namespace App\Router;

class Router
{
    const CNTRPATH = '\\app\\controllers\\';
    private $uri=array();
    public function __construct()
    {
        $this->uri=explode('/',$_SERVER['REQUEST_URI']);
    }
    public function redirect()
    {
        if(!empty($this->uri[1])){
            $controller = $this->uri[1];
        }
        if(!empty($this->uri[2])){
            $action=$this->uri[2];
        }
        if(!empty($this->uri[3])) {
            $param = $this->uri[3];
        }
        if(empty($controller))
            throw new \Exception('Контроллер пуст');
        $controlFull = self::CNTRPATH.$controller;
        $actions='action'.$action;
        if(!class_exists($controlFull,false))
            throw new \Exception('Класс контроллера не обнаружен');
        $control = new $controlFull;
        if($control && $action){
            if(method_exists($control,$actions)) {
                if ($param) {
                    $control->$actions($param);
                }
                else
                    $control->$actions();
            }else
                throw new \Exception('Метод контроллера не обнаружен');
        }else
            $control->actionAll();
    }
}
