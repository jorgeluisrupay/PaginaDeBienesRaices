<?php     
//Importar la conexion
require 'includes/config/database.php';
$db = conectarBD();

//Crear un email y password
$email = "correo@correo.com";
$password = "123456";

//La variable k queres hashear, el otro como lo quieres hacer
//Los hashes siempre van a tener una extension de 60
$passwordHash = password_hash($password, PASSWORD_DEFAULT);


//Query para crear al usuario
$query = " INSERT INTO usuarios (email, password) values ('${email}', '${passwordHash}');";

echo $query;
//exit;

//Agregar a la base de datos
mysqli_query($db, $query);
?>