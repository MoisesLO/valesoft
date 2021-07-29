<?php

namespace App\Middlewares;

class CheckAuth
{

  public function handle()
  {
    session_start();

    if (!isset($_SESSION['id'])) {
      header('Location: login');
      exit;
    } else {
      return true;
    }
  }

}