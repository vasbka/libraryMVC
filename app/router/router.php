<?php

namespace App\Router;

class Router
{
    const CNTRPATH = '\\app\\controllers\\';
    private $uri=array(),$controlFull,$actions,$param;

    public function __construct()
    {
        $this->uri=preg_split('/[\\/?]/',$_SERVER['REQUEST_URI']);
    }
    private function URLisCorrect(){
        if(!empty($this->uri[1])){
            $controller = $this->uri[1];
        }
        if(!empty($this->uri[2])){
            $action=$this->uri[2];
        }
        if(!empty($this->uri[3])) {
            $this->param = $this->uri[3];
        }
        $this->controlFull = self::CNTRPATH.$controller;
        if(empty($controller))
            throw new \Exception('Controller is empty');

        if(!class_exists($this->controlFull,true))
            throw new \Exception('Controller not found');
        $this->actions='action'.$action;
        if(!method_exists($this->controlFull,$this->actions)){
            throw new \Exception('Method not found');
        }
    }

    public function redirect()
    {
        try {
            $this->URLisCorrect();
        }catch(\Exception $e){
            (new \App\Classes\View)->display('404',array("message"=>$e->getMessage()));
        }
        $control = new $this->controlFull;
        $action = $this->actions;
        
        if($this->param)
            $control->$action($this->param);
        else
            $control->$action();

    }

}
