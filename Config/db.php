<?php

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=srv-pleskdb34.ps.kz;dbname=skykz124_todo_php", 'skykz124_todo_php', '^N3o81lu');
        }
        return self::$bdd;
    }
}
?>