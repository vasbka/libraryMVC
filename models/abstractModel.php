<?
class abstractModel
{
    protected static $table;
    public static function getAll()
    {
        $CONNECT = db::getConnection();
        return $CONNECT->query("SELECT * FROM ".static::$table);
    }
    public static function getById($id)
    {
        $CONNECT = db::getConnection();
        if(static::class=='bookModel')
            $param='bookId';
        else
            $param='authorId';
        if($CONNECT->query("SELECT * FROM ".static::$table." where ".$param." = ".(int)$id)->rowCount()>=1)
            return $CONNECT->query("SELECT * FROM ".static::$table." where ".$param." = ".(int)$id);
    }
}