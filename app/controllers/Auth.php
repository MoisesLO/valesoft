<?php

namespace App\Controllers;

use Core\Controller;

class Auth extends Controller
{
  public function index()
  {
    return $this->view('auth/register');
  }

  public function login()
  {
    return $this->view('auth/login');
  }

  public function apiRegistro()
  {
    return $this->viewApi('auth/api_register');
  }

  public function apiLogin(){
    return $this->viewApiPost('auth/api_login');
  }

}