<?php
class router
{
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
        if(!empty($this->uri[3])){
            $param=$this->uri[3];
        }
        $controllerName=$controller.'Controller';
        $actions='action'.$action;
        $control = new $controllerName;
        if($control && $action){
            if(method_exists($control,$actions)) {
                if ($param)
                    $control->$actions($param);
                else
                    $control->$actions();
            }else
                require_once '404.php';
        }else
            $control->actionAll();

    }
}
