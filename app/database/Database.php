<?php 

class Database {

    private static $pdo;

    public static function openLink() {
        return self::$pdo = new PDO('mysql:host=localhost;dbname=cleanvotemini','root','');
    }

    public static function closeLink() {
        self::$pdo = null;
    }

}