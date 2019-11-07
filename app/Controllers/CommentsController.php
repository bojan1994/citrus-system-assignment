<?php


namespace App\Controllers;


use App\Models\Comment;

class CommentsController
{
    protected $comment;

    /**
     * CommentsController constructor.
     */
    public function __construct()
    {
        $this->comment = new Comment();
    }

    /**
     * Storing new comments into database
     */
    public function store()
    {
        $this->comment->create($_POST['name'], $_POST['email'], $_POST['comment']);

        header('Location: /');
    }
}