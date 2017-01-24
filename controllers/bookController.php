<?
class bookController
{
    private $data;
    public function actionAll()
    {
        $data = bookModel::getAll();
        require_once '/../views/bookView.php';
    }
    public function actionOne($id)
    {
        $data = bookModel::getById($id);
        if($data)
            require_once '/../views/bookView.php';
        else
            echo'Такой книги нету.';
    }
}