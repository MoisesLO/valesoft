<?php

namespace App\Controllers;

use Core\Controller;

class InvoiceController extends Controller
{

  public function index()
  {
    return $this->viewDashboard('invoice/index');
  }

  public function newFacturaBoleta()
  {
    return $this->viewDashboard('invoice/new_fa_bo');
  }

  public function newNotaCreditoDebito()
  {
    return $this->viewDashboard('invoice/new_cred_debi');
  }

}