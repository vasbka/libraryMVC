<?php
namespace App\Controllers;
class Author
    extends \App\Controllers\BaseController
{
    private $data;

    public function actionAll()
    {
        $authors = \App\Models\Author::getAll();
        $this->view->display('authorView',compact('authors'));
    }
    public function actionOne($id = 1)
    {
        $authors = \App\Models\Author::getById($id);
        if($authors)
            $this->view->display('authorView',compact('authors'));
        else
            echo'Author with id '.$id.' not found';
    }
}