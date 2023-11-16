<?php
switch($_SERVER['REQUEST_URI']){
    case '/':
        include 'views/index.php';
        break;
    case '/about':
        include 'views/about.php';
        break;
    case '/contacts':
        include 'views/contacts.php';
        break;
    default:
        http_response_code(404);
        include 'views/404.php';
        break;
}