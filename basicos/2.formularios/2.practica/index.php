<?php

    $nombre = "";
    $apellido = "";
    $tipo_documento = "";
    $numero_id = "";
    $genero = "";
    $correo = "";
    $contrasena = "";
    $fecha_nacimiento = "";
    $tecnologias = [];
    $descripcion = "";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nombre = $_POST['user'];
        $apellido = $_POST['lastname'];
        $tipo_documento = $_POST['identificacion'];
        $numero_id = $_POST['numeroID'];
        $genero = $_POST['genero'];
        $correo = $_POST['email'];
        $contrasena = $_POST['password'];
        $fecha_nacimiento = $_POST['date'];
        $tecnologias = $_POST['tecnologias'];
        $descripcion = $_POST['descripcion'];


        echo "<h2>Información</h2>";
        echo "Nombre: ". $nombre . "</br>"; 
        echo "Apellidos: " . $apellido . "</br>";
        echo "Tipo de documento: " . $tipo_documento . "</br>";
        echo "Número identificación: " . $numero_id . "</br>";
        echo "Genero: " . $genero . "</br>";
        echo "Correo Electrónico: " . $correo . "</br>";
        echo "Contraseña: " . $contrasena . "</br>";
        echo "Fecha de Nacimiento: " . $fecha_nacimiento . "</br>";
        echo "Tecnologias: ";
        foreach($tecnologias as $tecnologia){
            echo $tecnologia. " ";
        }
        echo "</br>";
        echo "Descripcion: " . $descripcion . "</br>";
       
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form method="post" action="" class="form">
        <div class="form_group">
            <label for="user">Nombre: </label>
            <input type="text" name="user" id="user">
        </div>

        <div class="form_group">
            <label for="lastname">Apellidos:</label>
            <input type="text" name="lastname" id="lastname">
        </div>

        <div class="form_group">
            <label for="identificacion">Tipo documento: </label>
            <select name="identificacion" id="identificacion">
                <option value="">Seleccione</option>
                <option value="Cédula">Cédula</option>
                <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                <option value="Pasaporte">Pasaporte</option>
                <option value="Registro civil">Registro civil</option>
            </select>
        </div>

        <div class="form_group">
            <label for="numeroID">N° Identificación:</label>
            <input type="number" name="numeroID" id="numeroID">
        </div>

        <div class="form_group">
            <label for="genero">Genero:</label>
            <div>
                <input type="radio" name="genero" value="masculino"> Masculino
                <input type="radio" name="genero" value="femenino"> Femenino
            </div>
            
        </div>

        <div class="form_group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email">
        </div>

        <div class="form_group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password">
        </div>

        <div class="form_group">
            <label for="date">Fecha de Nacimiento:</label>
            <input type="date" name="date">
        </div>

        <div class="form_group">
            <label for="tecnologias">Tecnologias:</label>
            <div class="tecnologias">
                <input type="checkbox" name="tecnologias[]" value="html"> html
                <input type="checkbox" name="tecnologias[]" value="css"> css
                <input type="checkbox" name="tecnologias[]" value="js"> javascript
                <input type="checkbox" name="tecnologias[]" value="php"> php
                <input type="checkbox" name="tecnologias[]" value="sql"> sql
                <input type="checkbox" name="tecnologias[]" value="bootstrap">bootstrap
            </div>
        </div>

        <div class="form_group">
            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" id="descripcion" rows="4" cols="50"></textarea>
        </div>

        <button class="btn_submit" type="submit">Enviar</button>
    </form>
</body>
</html>