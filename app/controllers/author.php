<?php
namespace App\Controllers;
class Author
{
    private $data;
    public function actionAll()
    {
        $data = AuthorModel::getAll();
        require_once '/../views/authorView.php';
    }
    public function actionOne($id)
    {
        $data = AuthorModel::getById($id);
        if($data)
            require_once '/../views/authorView.php';
        else
            echo'Такого автора нету.';
    }
}