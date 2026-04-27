<?php

$nombre = trim($_POST["nombre"]);
$correo = trim($_POST["correo"]);
$clave = trim($_POST["clave"]);

if($nombre == "" || $correo == "" || $clave == ""){
    echo "Todos los campos son obligatorios.";
    exit();
}

echo "<h1>Usuario Registrado Correctamente</h1>";
echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";

?>