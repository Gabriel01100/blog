<?php
require 'db.php';
session_start(); //Mantiene la sesion abierta

if(!isset($_SESSION['usuario_id'])){ 
    header('Location: login.php');
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $autor_id = $_SESSION['usuario_id'];

    $sql = "INSERT INTO posts (titulo, contenido, autor_id) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content, $autor_id]);
    header("Location: dashboard.php");
}



?>
<form method="POST">
    <input type="text" placeholder="title" name="title">
    <textarea name="content" id="" placeholder="Postea algo"></textarea>
    <button type="submit">Postear</button>
</form>