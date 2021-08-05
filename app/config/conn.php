<?php
	

// conexion
$conn = new mysqli(
    'localhost',
    'root',
    'moiseslinar3s',
    'valesoft',
		3306);

if ($conn->connect_error) {
    echo "No se pudo conectar a la Base de Datos";
    exit;
}

?>