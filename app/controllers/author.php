<?php
namespace App\Controllers;
class Author
    extends \App\Controllers\BaseController
{
    private $data;

    function __construct()
    {
        $this->view = \App\Classes\View;
    }

    public function actionAll()
    {
        $this->data->setData( \App\Models\Author::getAll());
        $this->view->display('authorView');
    }
    public function actionOne($id = 1)
    {
        $data = \App\Models\Author::getById($id);
        if($data)
            $this->view->display('authorView');
        else
            echo'Author with id '.$id.' not found';
    }
}