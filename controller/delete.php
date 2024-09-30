<?php
require '../db.php';
session_start();
require '../model/usuario.php';

$post_id = $_GET['id'];

$sql = "DELETE FROM posts WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$post_id]);

header("Location: ../view/dashboard.php");
