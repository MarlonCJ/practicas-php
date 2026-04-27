<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema Registro de Usuarios</title>
</head>
<body>

    <div class="container">
        <h1>Registro de Usuarios</h1>
        <form action="procesar.php" method="post">
            <input type="text" name="user" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>





