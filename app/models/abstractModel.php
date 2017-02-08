<?php

namespace App\Models;

class AbstractModel
{
    protected static $table;
    public static function getAll()
    {
        $CONNECT = \App\Classes\DB::getConnection();
        return $CONNECT->query("SELECT * FROM ".static::$table)->fetchAll();
    }
    public static function getById($id)
    {
        $CONNECT = \App\Classes\DB::getConnection();
        if(static::$table=='books')
            $param='BookId';
        else
            $param='authorId';
        if($CONNECT->query("SELECT * FROM ".static::$table." WHERE ".$param." = ".(int)$id)){
            if($CONNECT->query("SELECT * FROM ".static::$table." WHERE ".$param." = ".(int)$id)->rowCount()>=1)
                return $CONNECT->query("SELECT * FROM ".static::$table." WHERE ".$param." = ".(int)$id)->fetchAll();
        }

    }
    public static function getAllFull(){
        $CONNECT = \App\Classes\DB::getConnection();
        return $CONNECT->query("select books.name,author.namev from books,author,bookAuthor where bookAuthor.bookId=books.BookId and bookAuthor.authorId=author.authorId")->fetchAll();
    }

}