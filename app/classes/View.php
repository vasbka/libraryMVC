<?php

namespace App\Classes;

class View
{
    private $data;
    public function display($page)
    {
        require_once('/views/'.$page.'.php');
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function checkData()
    {
        if($this->data)
            return true;
        return false;
    }
}