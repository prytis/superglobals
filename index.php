<?php

require_once('config.php');
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/login.php';
        break;
    case '' :
        require __DIR__ . '/views/login.php';
        break;
    case '/login' :
        require __DIR__ . '/views/login.php';
        break;
    case '/logout' :
        require __DIR__ . '/http/logout.php';
        break;
    case '/view' :
        require __DIR__ . '/views/view.php';
        break;
    case '/controller' :
        require __DIR__ . '/http/controller.php';
        break;
    case '/del' :
        require __DIR__ . '/http/del.php';
        break;
    case '/check_login' :
        require __DIR__ . '/http/check_login.php';
        break;    
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}