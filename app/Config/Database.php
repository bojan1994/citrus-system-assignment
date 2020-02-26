<?php


namespace App\Config;


use PDO;

abstract class Database
{
    /**
     * @var null
     */
    private static $_db = null;

    /**
     * Database constructor.
     */
    private function __construct(){}

    /**
     * @return PDO|null
     */
    public static function getConnection()
    {
        if (!self::$_db) {
            self::$_db = new PDO('mysql:host=localhost;dbname=catalog','bojan','bojan1994');
        }

        return self::$_db;
    }
}