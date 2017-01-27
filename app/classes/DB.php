<?php
namespace app\classes;
use PDO;
abstract class DB
{
    function getConnection()
    {
        return new PDO('mysql:host=localhost;dbname=library','root','');
    }
}