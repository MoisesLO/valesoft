<?php

// get Data
$data = $data['registro'];
$nombres = $data['nombres'];
$apellidos = $data['apellidos'];
$correo = $data['correo'];
$password = $data['password'];

// Check
$query = "SELECT count(*) as cantidad from usuarios where correo = '{$correo}' and password = '{$password}'";
$query = $conn->query($query);
$cantidad = $query->fetch_assoc();

if ($cantidad['cantidad'] == 0) {
  // SQL

  $insert = "insert into usuarios (
                        nombres,
                        apellidos,
                        correo,
                        password
                        ) values (
                        '{$nombres}',
                        '{$apellidos}',  
                        '{$correo}',  
                        '{$password}'                        
                        )";
  if ($conn->query($insert)) {
    echo "ok";
  } else {
    echo "no";
  }

} else{
  echo "no";
}

//echo json_encode($query['cantidad']);





?>