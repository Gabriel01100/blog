<?php
require "../controller/login.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Blog</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container-all">
        <header>
            <nav class="nav-header">
                <a href="register.php">Registrarse</a>
                <a href="#">Contacto</a>
            </nav>
        </header>
    
        <div class="msg-registro"><h1>Inicio de Sesion</h1></div>
        <form method="POST" class="form-login">
            <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
    <footer></footer>
</body>
</html>