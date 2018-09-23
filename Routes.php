<?php 
use Illuminate\Routing\Router;

$router->get('/', function () {
    return 'hello world!';
});

$router->get('/about', function () {
    return 'About!';
});