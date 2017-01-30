<?php
namespace App\Controllers;
class Author
{
    private $data;
    public function actionAll()
    {
        $data = \App\Models\Author::getAll();
        require_once '/../../views/authorView.php';
    }
    public function actionOne($id = 1)
    {
        $data = \App\Models\Author::getById($id);
        if($data)
            require_once '/../../views/authorView.php';
        else
            echo'Такого автора нету.';
    }
}