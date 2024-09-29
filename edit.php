<?php
require 'db.php';
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

$post_id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = 'UPDATE posts SET titulo = ?, contenido = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title,$content,$post_id]);
    header("Location: dashboard.php");
}else{
    $sql = "SELECT * FROM posts WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$post_id]);
    $post = $stmt->fetch();
}





?>


<form method="POST">
    <input type="text" name="title" value="<?php echo htmlspecialchars($post['titulo']);?>" placeholder="Ingrese un nuevo titulo">
    <textarea name="content"><?php echo htmlspecialchars($post['contenido']); ?> </textarea>
    <button type="submit">Actualizar</button>
</form>