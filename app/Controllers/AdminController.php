<?php


namespace App\Controllers;


use App\Models\Admin;
use App\Models\Comment;

class AdminController extends ViewController
{
    /**
     * @var $comments
     */
    protected $comments;

    /**
     * Showing the admin login page
     */
    public function index()
    {
        $this->getView('admin');
    }

    /**
     * Checking if admins credentials are correct
     *
     * @param Admin $admin
     */
    public function login(Admin $admin)
    {
        $admin->authenticate($_POST['username'], md5($_POST['password']));
    }

    /**
     * Showing the dashboard page if admin is logged in
     *
     * @param Admin $admin
     * @param Comment $comment
     */
    public function dashboard(Admin $admin, Comment $comment)
    {
        $admin->loggedIn();

        $this->comments = $comment->forPublishing();

        $this->getView('dashboard');
    }

    /**
     * Logging out
     *
     * @param Admin $admin
     */
    public function logout(Admin $admin)
    {
        $admin->logout();
    }

    /**
     * Publishing comments
     *
     * @param Comment $comment
     */
    public function publishComment(Comment $comment)
    {
        $comment->publish($_POST['commentId']);
    }
}