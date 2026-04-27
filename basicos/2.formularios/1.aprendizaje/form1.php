<?php

$error = "";
$nombre = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);

    if (empty($nombre) || empty($email)) {

        $error = "Todos los campos son obligatorios.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = "Correo electrónico inválido.";

    } else {

        echo "<h3>Formulario enviado correctamente</h3>";
        echo "Nombre: $nombre <br>";
        echo "Email: $email <br>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario Seguro</title>
</head>
<body>

<h2>Registro Usuario</h2>

<?php
if ($error != "") {
    echo "<p style='color:red;'>$error</p>";
}
?>

<form method="POST">

Nombre:
<input type="text" name="nombre" value="<?php echo $nombre; ?>"><br><br>

Email:
<input type="text" name="email" value="<?php echo $email; ?>"><br><br>

<input type="submit" value="Enviar">

</form>

</body>
</html>