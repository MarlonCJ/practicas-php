<?php

$usuario = trim($_POST['user']);
$correo = trim($_POST['email']);
$contraseña = trim($_POST['password']);

if($usuario == "" || $correo == "" || $contraseña == ""){
    echo "Todos los campos son obligatorios";
    exit();
}

echo "<h2>Registro Exitoso</h2>";
echo "<p>Usuario: $usuario</p>";
echo "<p>Correo Electrónico: $correo</p>";