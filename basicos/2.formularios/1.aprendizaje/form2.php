<?php

$ciudad = "";
$genero = "";
$hobbies = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ciudad = $_POST["ciudad"];
    $genero = $_POST["genero"] ?? "";
    $hobbies = $_POST["hobbies"] ?? [];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario Completo</title>
</head>
<body>

<h2>Formulario Profesional</h2>

<form method="POST">

Ciudad:
<select name="ciudad">
    <option value="">Seleccione</option>
    <option value="Bogotá">Bogotá</option>
    <option value="Medellín">Medellín</option>
    <option value="Villavicencio">Villavicencio</option>
</select>

<br><br>

Género:

<input type="radio" name="genero" value="Masculino"> Masculino
<input type="radio" name="genero" value="Femenino"> Femenino

<br><br>

Hobbies:

<input type="checkbox" name="hobbies[]" value="Gym"> Gym
<input type="checkbox" name="hobbies[]" value="Programar"> Programar
<input type="checkbox" name="hobbies[]" value="Leer"> Leer

<br><br>

<input type="submit" value="Enviar">

</form>

<hr>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "Ciudad: $ciudad <br>";
    echo "Género: $genero <br>";

    echo "Hobbies: ";

    foreach ($hobbies as $hobbie) {
        echo $hobbie . " ";
    }
}
?>

</body>
</html>