<?php


namespace App\Controllers;


use App\Models\Comment;

class CommentsController
{
    /**
     * Storing new comments into database
     *
     * @param Comment $comment
     */
    public function store(Comment $comment)
    {
        $comment->create($_POST['name'], $_POST['email'], $_POST['comment']);
    }
}