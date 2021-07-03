<?php

namespace App\Controllers;

// use App\Middlewares\CheckAuth;
use Core\Controller;

class Home extends Controller{

    public function index(){
        return $this->view('index');
    }

}