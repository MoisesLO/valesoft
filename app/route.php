<?php

$app->router->get('/', 'Home@index');
  
$app->router->get('/about', function () {
    require './views/about.php';
    return 'About Page';
});

$app->router->get('/registro', 'Auth@index');
$app->router->get('/login', 'Auth@login');

//$app->router->get('/register', function () {
//    require './views/auth/register.php';
//});


