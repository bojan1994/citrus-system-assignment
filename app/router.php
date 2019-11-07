<?php

use App\Controllers\AppController;
use App\Controllers\CommentsController;
use App\Controllers\AdminController;

$request = $_SERVER['REQUEST_URI'];

$app = new AppController();
$comment = new CommentsController();
$admin = new AdminController();

switch ($request) {
    case '/' :
        $app->index();
        break;
    case '/comment' :
        $comment->store();
        break;
    case '/admin' :
        $admin->index();
        break;
    case '/login' :
        $admin->login();
        break;
    case '/dashboard' :
        $admin->dashboard();
        break;
    case '/logout' :
        $admin->logout();
        break;
    case '/publish' :
        $admin->publishComment();
        break;
    default:
        http_response_code(404);
        die('Page not found');
        break;
}