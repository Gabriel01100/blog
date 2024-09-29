<?php
    require 'db.php';
    session_start();
    $usuario = null;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre_usuario = $_POST['nombre_usuario'];
        $contraseña = $_POST['contraseña'];

        $sql = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre_usuario]);
        $usuario = $stmt->fetch();

        if($usuario && password_verify($contraseña, $usuario['contraseña'])){
            $_SESSION['usuario_id'] = $usuario['id']; //Guarda el id de la db del usuario en 'usuario_id'
            $_SESSION['nombre_usuario'] = $usuario['nombre_usuario']; //lo mismo con el pass
            header("Location: dashboard.php");
        }else{
            echo "Contraseña o usuario incorrectos";
        }
    
    }



?>


<form method="POST">
    <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
    <input type="password" name="contraseña" placeholder="Contraseña" required>
    <button type="submit">Iniciar sesión</button>
</form>