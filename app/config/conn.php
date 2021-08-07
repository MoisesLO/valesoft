<?php
	

// conexion
$conn = new mysqli(
    'localhost',
    'root',
    '',
    'valesoft',
		3306);

if ($conn->connect_error) {
    echo "No se pudo conectar a la Base de Datos";
    exit;
}

?>