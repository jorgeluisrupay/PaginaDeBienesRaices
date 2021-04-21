<?php

function conectarBD() : mysqli {
    $db = mysqli_connect('bienes-raices.c8ayhidelcug.us-east-1.rds.amazonaws.com', 'admin', '12345678','bienes_raices');

    if(!$db){
        echo "Error no se pudo conectar";
        exit;
    }

    return $db;
}