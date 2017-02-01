<?
namespace App\Controllers;
class Book
    extends \App\Controllers\BaseController
{
    public $view;
    function __construct()
    {
        $this->view = new \App\Classes\View;
    }

    public function actionAll()
    {
        $this->view->setData(\App\Models\Book::getAll());
        $this->view->display('bookView');
    }
    public function actionOne($id = 1)
    {
        $this->view->setData(\App\Models\Book::getById($id));
        if($this->view->checkData())
            $this->view->display('bookView');
        else
            echo'Book not found';
    }
}