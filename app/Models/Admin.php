<?php


namespace App\Models;


use App\Config\Database;

class Admin
{
    /**
     * Logic for admin authentication
     *
     * @param $username
     * @param $password
     */
    public function authenticate($username, $password)
    {
        $conn = Database::getConnection();
        $st = $conn->prepare('SELECT * FROM admin WHERE username = ? and password = ?');
        $st->bindParam(1, $username);
        $st->bindParam(2, $password);
        $st->execute();
        if ($st->rowCount() > 0) {
            session_start();
            $_SESSION['admin'] = md5(time().microtime().uniqid());
            header('Location: /dashboard');
        } else {
            header('Location: /admin');
        }
    }

    /**
     * Logic for logging out
     */
    public function logout()
    {
        session_start();
        unset($_SESSION['admin']);
        session_destroy();
    }

    /**
     * Logic for checking if admin is logged in
     */
    public function loggedIn()
    {
        session_start();
        if (!isset($_SESSION['admin'])) {
            header('Location: /admin');
        }
    }
}