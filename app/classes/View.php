<?php

namespace App\Classes;

class View
{
    private $data;
    public function display($page,$data)
    {
        if($data['books'])
            extract($data['books'],EXTR_OVERWRITE);
        else if($data['authors'])
            extract($data['authors'],EXTR_OVERWRITE);
        require_once('/views/'.$page.'.php');
    }
}