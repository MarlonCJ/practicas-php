<?php

$error = "";
$exito = "";

$nombre = "";
$email = "";
$ciudad = "";
$genero = "";
$hobbies = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars(trim($_POST["nombre"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $ciudad = $_POST["ciudad"] ?? "";
    $genero = $_POST["genero"] ?? "";
    $hobbies = $_POST["hobbies"] ?? [];

    if ($nombre == "" || $email == "") {
        $error = "Nombre y correo son obligatorios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Correo inválido.";
    } elseif ($ciudad == "") {
        $error = "Debes seleccionar una ciudad.";
    } elseif ($genero == "") {
        $error = "Debes elegir género.";
    } else {
        $exito = "Formulario enviado correctamente.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario Profesional</title>

<style>
body{
    font-family: Arial;
    background:#f4f4f4;
}

.contenedor{
    width:420px;
    background:white;
    padding:25px;
    margin:40px auto;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,.15);
}

input, select{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
}

button{
    width:100%;
    padding:12px;
    background:#007bff;
    color:white;
    border:none;
    cursor:pointer;
}

.error{
    color:red;
    margin-bottom:15px;
}

.ok{
    color:green;
    margin-bottom:15px;
}
</style>

</head>
<body>

<div class="contenedor">

<h2>Registro Profesional</h2>

<?php if($error != "") echo "<div class='error'>$error</div>"; ?>
<?php if($exito != "") echo "<div class='ok'>$exito</div>"; ?>

<form method="POST">

Nombre:
<input type="text" name="nombre" value="<?php echo $nombre; ?>">

Email:
<input type="text" name="email" value="<?php echo $email; ?>">

Ciudad:
<select name="ciudad">
<option value="">Seleccione</option>
<option value="Bogotá">Bogotá</option>
<option value="Medellín">Medellín</option>
<option value="Villavicencio">Villavicencio</option>
</select>

Género:

<input type="radio" name="genero" value="Masculino"> Masculino
<input type="radio" name="genero" value="Femenino"> Femenino

<br><br>

Hobbies:

<input type="checkbox" name="hobbies[]" value="Gym"> Gym
<input type="checkbox" name="hobbies[]" value="Programar"> Programar
<input type="checkbox" name="hobbies[]" value="Leer"> Leer

<br><br>

<button type="submit">Registrar</button>

</form>

</div>

</body>
</html>