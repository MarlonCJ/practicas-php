<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="contenedor">
        <h1>Registro de Usuarios</h1>

        <form action="procesar.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre completo" required>

            <input type="email" name="correo" placeholder="Correo electrónico" required>

            <input type="password" name="clave" placeholder="Contraseña" required>

            <button type="submit">Registrarse</button>
        </form>
    </div>

</body>
</html>