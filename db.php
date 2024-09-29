<?php
$host = 'localhost';  // El servidor de MySQL
$db = 'ejercicio1';       // Nombre de la base de datos
$user = 'root';       // Tu usuario de MySQL (por defecto es 'root')
$pass = '';           // La contraseña de tu usuario de MySQL (deja vacía si no tienes)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}

