<?php 
require "../db.php";
session_start();

require '../model/usuario.php';

$sql = "SELECT p.id, p.titulo, p.contenido, u.nombre_usuario, p.fecha 
        FROM posts p
        JOIN usuarios u ON p.autor_id = u.id
        ORDER BY p.fecha DESC";
$stmt = $pdo->query($sql);
$posts = $stmt->fetchAll();
