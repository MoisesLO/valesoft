<?php

namespace App\Controllers;

// use App\Middlewares\CheckAuth;
use Core\Controller;

class HomeController extends Controller{

    public function index(){
        return $this->view('web/index');
    }

}