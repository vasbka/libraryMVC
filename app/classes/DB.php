<?php
namespace App\Classes;

abstract class DB
{
    function getConnection()
    {
        return new \PDO('mysql:host=localhost;dbname=library','root','');
    }
}