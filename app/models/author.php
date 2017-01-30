<?php
namespace App\Models;

class Author
    extends \App\Models\AbstractModel
{
    protected static $table='author';

    public function insertIntoDB(){
        $CONNECT = \App\Classes\DB::getConnection();
        $CONNECT->exec("INSERT INTO author VALUES ('','qwerty'");
        echo '123';die;
    }
}