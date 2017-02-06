<?php

namespace App\Classes;

class parserJSON
{
    function parse($url){
        $_POST = file_get_contents($url);
        $tmp = json_decode($_POST,assoc);
        if($tmp['books'])
            return 'parseLikeArrayOfObj';
        else
            return 'parseLikeObj';
    }
}