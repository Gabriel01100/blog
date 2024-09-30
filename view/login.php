<?php
require "../controller/login.php";
?>

<form method="POST">
    <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
    <input type="password" name="contraseña" placeholder="Contraseña" required>
    <button type="submit">Iniciar sesión</button>
</form>