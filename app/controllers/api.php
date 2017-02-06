<?php

namespace App\Controllers;

class api
{
    private $parser;
    function __construct()
    {
        $this->parser = new \App\Classes\parserJSON;
    }

    function actionimport()
    {

        echo $this->parser->parse('app/dataJSON/exampleOneObj.json');
    }
    function actionexport($param)
    {
        $param = \App\Models\book::getById($_GET[$param.'Id']);
        ?><pre><?var_dump(json_encode($param))?></pre><?
        file_put_contents('app/dataJSON/exampleExportBook.json',json_encode($param));
    }
}