<?php

$app->router->get('/', 'HomeController@index');
  
$app->router->get('/about', function () {
    require './views/about.php';
    return 'About Page';
});

// Auth
$app->router->get('/api/registro', 'Auth@apiRegistro');
$app->router->get('/registro', 'Auth@index');
$app->router->post('/api_registro', 'Auth@apiRegistro');
$app->router->get('/login', 'Auth@login');

// Dashboard
$app->router->get('/dashboard','DashboardController@index');

//$app->router->get('/register', function () {
//    require './views/auth/register.php';
//});


