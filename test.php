<?php

require "./app/config/conn.php";

$query = "SELECT count (*) as cantidad from usuarios where correo = 'elnaufrago2009@gmail.com' and password = 'moiseslinar3s'";
$query = $conn->query($query);
$query = $query->fetch_array(MYSQLI_ASYNC);

print_r($query);

?>