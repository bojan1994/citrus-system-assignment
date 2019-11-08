<?php


namespace App\Controllers;


use App\Models\Admin;
use App\Models\Comment;

class AdminController extends ViewController
{
    protected $admin, $comment;

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->admin = new Admin();
        $this->comment = new Comment();
    }

    /**
     * Showing the admin login page
     */
    public function index()
    {
        $this->getView('admin');
    }

    /**
     * Checking if admins credentials are correct
     */
    public function login()
    {
        $this->admin->authenticate($_POST['username'], md5($_POST['password']));
    }

    /**
     * Showing the dashboard page if admin is logged in
     */
    public function dashboard()
    {
        $this->admin->loggedIn();

        $this->comments = $this->comment->forPublishing();

        $this->getView('dashboard');
    }

    /**
     * Logging out
     */
    public function logout()
    {
        $this->admin->logout();
    }

    /**
     * Publishing comments
     */
    public function publishComment()
    {
        $this->comment->publish($_POST['commentId']);
    }
}