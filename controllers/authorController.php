<?php
class authorController
{
    private $data;
    public function actionAll()
    {
        $data = authorModel::getAll();
        require_once '/../views/authorView.php';
    }
    public function actionOne($id)
    {
        $data = authorModel::getById($id);
        if($data)
            require_once '/../views/authorView.php';
        else
            echo'Такого автора нету.';
    }
}