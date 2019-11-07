<?php


namespace App\Controllers;


use App\Models\Comment;
use App\Models\Product;

class AppController extends ViewController
{
    protected $product, $comment;

    /**
     * AppController constructor.
     */
    public function __construct()
    {
        $this->product = new Product();
        $this->comment = new Comment();
    }

    /**
     * Showing the products page
     */
    public function index()
    {
        $this->products = $this->product->fetch();

        $this->comments = $this->comment->fetch();

        $this->getView('home');
    }
}