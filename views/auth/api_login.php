<?php
session_start();
//ini_set('display_errors',0);
error_reporting(E_ERROR | E_WARNING | E_PARSE );
// Receive Data
$correo = $data['login']['correo'];
$password = $data['login']['password'];

// Query
$sql = "select * from usuarios where correo = '{$correo}' and password = '{$password}'";
$chek = $conn->query($sql);
$chek = $chek->fetch_array(MYSQLI_ASSOC);

// Check
if ($correo === $chek['correo'] && $password === $chek['password']){
  $_SESSION['id'] = $chek['id'];
  $_SESSION['correo'] = $chek['correo'];
  $_SESSION['nombres'] = $chek['nombres'];
  $_SESSION['apellidos'] = $chek['apellidos'];

  echo 'ok';
}else {
  echo 'no';
}