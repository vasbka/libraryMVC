<?php

namespace App\Classes;

class View
{
    private $data;
    public function display($page,$data)
    {

        extract($data,EXTR_OVERWRITE);

        require_once('/views/'.$page.'.php');
    }
}