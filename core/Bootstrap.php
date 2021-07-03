<?php

namespace Core;

use Buki\Router\Router;

class Bootstrap{

  public $router;
  

  public function __construct()
  {
    $this->router = new Router([
      'paths' => [
        'controllers' => 'app/controllers',
        'middlewares' => 'app/Middlewares'   
      ],
      'namespaces' => [
        'controllers' => 'App\Controllers',
        'middlewares' => 'App\Middlewares'   
      ]
    ]);    
  }

  public function run()
  {
      $this->router->run();
  }

}