<?php


namespace App\Controllers;


use App\Models\Comment;
use App\Models\Product;

class AppController extends ViewController
{
    /**
     * @var $products
     * @var $comments
     */
    protected $products, $comments;

    /**
     * Showing the products page
     *
     * @param Product $product
     * @param Comment $comment
     */
    public function index(Product $product, Comment $comment)
    {
        $this->products = $product->fetch();

        $this->comments = $comment->fetch();

        $this->getView('home');
    }
}