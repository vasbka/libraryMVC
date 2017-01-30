<?
namespace App\Controllers;
class Book
{
    private $data;
    public function actionAll()
    {
        $data = \App\Models\Book::getAll();
        require_once '/../../views/bookView.php';
    }
    public function actionOne($id = 1)
    {
        $data = \App\Models\Book::getById($id);
        if($data)
            require_once '/../../views/bookView.php';
        else
            echo'Такой книги нету.';
    }
}