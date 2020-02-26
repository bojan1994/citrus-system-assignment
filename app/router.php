<?php

use App\Controllers\AppController;
use App\Controllers\CommentsController;
use App\Controllers\AdminController;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Comment;

$request = $_SERVER['REQUEST_URI'];

$appController = new AppController();
$commentController = new CommentsController();
$adminController = new AdminController();
$admin = new Admin();
$product = new Product();
$comment = new Comment;

switch ($request) {
    case '/' :
        $appController->index($product, $comment);
        break;
    case '/comment' :
        $commentController->store($comment);
        break;
    case '/admin' :
        $adminController->index();
        break;
    case '/login' :
        $adminController->login($admin);
        break;
    case '/dashboard' :
        $adminController->dashboard($admin, $comment);
        break;
    case '/logout' :
        $adminController->logout($admin);
        break;
    case '/publish' :
        $adminController->publishComment($comment);
        break;
    default:
        http_response_code(404);
        die('Page not found');
        break;
}