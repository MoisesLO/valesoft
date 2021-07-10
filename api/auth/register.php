<?php

$register = [
    "status" => "ok",
    "user" => [
        "nombres" => "Abraham Moises",
        "apellidos" => "Linares Osccoo",
        "correo" => "elnaufrago2009@gmail.com"
    ],
    "empresa" => [
        "ruc" => "10425162531",
        "razon" => "SURMOTRIZ S.R.L.",
        "direccion" => "CM 40 LT 15 MZ 213 Ciudad Nueva"
    ]
];

echo json_encode($register);