<?php

namespace App\Middlewares;

class CheckLoginRegister
{
  public function handle()
  {
    session_start();
    if (!isset($_SESSION['id'])) {
      return true;
    } else {
      header('Location: dashboard');
      exit;
    }
  }
}