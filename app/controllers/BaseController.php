<?php
/**
 * Created by PhpStorm.
 * User: василий
 * Date: 01.02.2017
 * Time: 11:42
 */

namespace App\Controllers;


abstract class BaseController
{
    protected $view;
    public function __construct()
    {
        $this->view = new \App\Classes\View;
    }
}