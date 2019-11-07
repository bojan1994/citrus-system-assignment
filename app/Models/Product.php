<?php


namespace App\Models;


use App\Config\Database;

class Product
{
    /**
     * Logic for getting all products
     *
     * @return array
     */
    public function fetch()
    {
        $conn = Database::getConnection();
        $st = $conn->prepare('SELECT * FROM products');
        $st->execute();
        $output = [];
        while ($row = $st->fetch(\PDO::FETCH_OBJ)) {
            $output[] = $row;
        }
        return $output;
    }
}