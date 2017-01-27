<?
namespace app\controllers;
use app\models\book as BM;
class book
{
    private $data;
    public function actionAll()
    {
        $data = BM::getAll();
        require_once '/../../views/bookView.php';
    }
    public function actionOne($id)
    {
        $data = BM::getById($id);
        if($data)
            require_once '/../../views/bookView.php';
        else
            echo'Такой книги нету.';
    }
}