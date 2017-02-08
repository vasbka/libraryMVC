<?php

namespace App\Controllers;

class api
{
    private $parser;
    function __construct()
    {
        $this->parser = new \App\Classes\parserJSON;
    }

    function actionImport()
    {
        $datajson = $this->parser->parse('app/dataJSON/exampleArray.json');

    }
    function actionexport($param = [])
    {
        if($param){
            $data = \App\Models\book::getById($_GET[$param.'Id']);
        }else{

            $data = \App\Models\book::getAllFull();
            $nameBook = '';
            $obj = array();
            $bookName = '';
            foreach($data as $one)
            {
                if($bookName!=$one['name']) {
                    $bookName = $one['name'];
                    $authors = array();
                    foreach ($data as $two) {
                        if ($bookName === $two['name']) {
                            $authors[] = array('lastName' => $two['namev'],'firstName'=>'');
                        }
                    }
                    $obj[] = array('name' => $one['name'], 'authots'=>$authors);
                }
            }
            ?><pre><?echo json_encode($obj);?></pre><?
            /*
            [{"name":"\u041e\u0431\u0449\u0430\u044f\u041a\u043d\u0438\u0433\u04301","authots":[{"lastName":"\u0413\u043e\u0433\u043e\u043b\u044c","firstName":""},{"lastName":"\u0428\u0435\u0432\u0447\u0435\u043d\u043a\u043e","firstName":""}]},{"name":"\u041a\u0430\u043a\u0430\u044f \u0442\u043e \u043a\u043d\u0438\u0433\u0430","authots":[{"lastName":"\u041f\u0435\u0442\u0440\u043e\u0432","firstName":""},{"lastName":"\u0418\u0432\u0430\u043d\u043e\u0432","firstName":""}]},{"name":"asdf","authots":[{"lastName":"\u0418\u0432\u0430\u043d\u043e\u0432","firstName":""},{"lastName":"\u0418\u0432\u0430\u043d\u043e\u0432\u0438\u0447","firstName":""}]}]
            */
        }

    }
}