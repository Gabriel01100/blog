<?php 
    require '../controller/register.php';
    require 'header.php';
?>


<form method="POST">
    <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" require>
    <input type="password" name="contraseña" placeholder="Contraseña" require> 
    <button type="submit">Registrarse</button>
</form>

