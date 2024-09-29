<?php 
    require 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre_usuario = $_POST['nombre_usuario'];
        $contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);

        $sql = 'INSERT INTO usuarios (nombre_usuario , contraseña) VALUES (?,?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre_usuario, $contraseña]);

        echo 'Registro Exitoso';
    }

?>


<form method="POST">
    <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" require>
    <input type="password" name="contraseña" placeholder="Contraseña" require> 
    <button type="submit">Registrarse</button>
</form>

