<?php namespace app\models;
use app\classes\DB;
class abstractModel
{
    protected static $table;
    public static function getAll()
    {
        $CONNECT = DB::getConnection();
        return $CONNECT->query("SELECT * FROM ".static::$table);
    }
    public static function getById($id)
    {
        $CONNECT = DB::getConnection();
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