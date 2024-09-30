<?php
require '../db.php';
session_start();

require '../model/usuario.php';

$post_id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = 'UPDATE posts SET titulo = ?, contenido = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title,$content,$post_id]);
    header("Location: ../view/dashboard.php");
}else{
    $sql = "SELECT * FROM posts WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$post_id]);
    $post = $stmt->fetch();
}