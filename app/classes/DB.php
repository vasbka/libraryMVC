<?php
namespace App\Classes;
use PDO;
abstract class DB
{
    function getConnection()
    {
        return new PDO('mysql:host=localhost;dbname=library','root','');
    }
}