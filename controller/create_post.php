<?php
require '../db.php';
session_start(); //Mantiene la sesion abierta
require '../model/usuario.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $autor_id = $_SESSION['usuario_id'];

    $sql = "INSERT INTO posts (titulo, contenido, autor_id) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content, $autor_id]);
    header("Location: ../view/dashboard.php");
}
