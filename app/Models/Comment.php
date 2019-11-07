<?php


namespace App\Models;


use App\Config\Database;

class Comment
{
    /**
     * Logic for getting all comments
     *
     * @return array
     */
    public function fetch()
    {
        $conn = Database::getConnection();
        $st = $conn->prepare('SELECT * FROM comments WHERE published = 1');
        $st->execute();
        $output = [];
        while ($row = $st->fetch(\PDO::FETCH_OBJ)) {
            $output[] = $row;
        }
        return $output;
    }

    /**
     * Logic for storing new comments
     *
     * @param $name
     * @param $email
     * @param $message
     */
    public function create($name, $email, $message)
    {
        $conn = Database::getConnection();
        $st = $conn->prepare('INSERT INTO comments values (null, ?, ?, ?, 0)');
        $st->bindParam(1, $name);
        $st->bindParam(2, $email);
        $st->bindParam(3, $message);
        $st->execute();
    }

    /**
     * Logic for getting all unpublished comments
     *
     * @return array
     */
    public function forPublishing()
    {
        $conn = Database::getConnection();
        $st = $conn->prepare('SELECT * FROM comments WHERE published = 0');
        $st->execute();
        $output = [];
        while ($row = $st->fetch(\PDO::FETCH_OBJ)) {
            $output[] = $row;
        }
        return $output;
    }

    /**
     * Logic for publishing comment
     *
     * @param $commentId
     */
    public function publish($commentId)
    {
        $conn = Database::getConnection();
        $st = $conn->prepare('UPDATE comments SET published = 1 WHERE id = ?');
        $st->bindParam(1, $commentId);
        $st->execute();
    }
}