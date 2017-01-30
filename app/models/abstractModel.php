<?php namespace App\Models;

class AbstractModel
{
    protected static $table;
    public static function getAll()
    {
        $CONNECT = \App\Classes\DB::getConnection();
        return $CONNECT->query("SELECT * FROM ".static::$table);
    }
    public static function getById($id)
    {
        $CONNECT = \App\Classes\DB::getConnection();
        if(static::$table=='books')
            $param='bookId';
        else
            $param='authorId';
        if($CONNECT->query("SELECT * FROM ".static::$table." where ".$param." = ".(int)$id)){
            if($CONNECT->query("SELECT * FROM ".static::$table." where ".$param." = ".(int)$id)->rowCount()>=1)
                return $CONNECT->query("SELECT * FROM ".static::$table." where ".$param." = ".(int)$id);
        }

    }

}