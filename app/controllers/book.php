<?php
namespace App\Controllers;
class Book
    extends \App\Controllers\BaseController
{
    public $view;

    public function actionAll()
    {
        $books = \App\Models\Book::getAll();
        $this->view->display('bookView',compact('books'));
    }
    public function actionOne($id = 1)
    {
        $books = \App\Models\Book::getById($id);
        if($books)
            $this->view->display('bookView',compact('books'));
        else
            echo'Book not found';
    }
}