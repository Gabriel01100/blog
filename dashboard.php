<?php 
require "db.php";
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT p.id, p.titulo, p.contenido, u.nombre_usuario, p.fecha 
        FROM posts p
        JOIN usuarios u ON p.autor_id = u.id
        ORDER BY p.fecha DESC";
$stmt = $pdo->query($sql);
$posts = $stmt->fetchAll();

?>


<h1>Bienvenido <?php echo $_SESSION['nombre_usuario'];?>!</h1>
<a href="logout.php">Cerrar sesión</a>
<a href="create_post.php">Crear nueva publicación</a>
<h2>Publicaciones</h2>

<?php foreach($posts as $post): ?>
    <div>
        <h3><?php echo htmlspecialchars($post['titulo']) ; ?></h3>
        <p><?php echo htmlspecialchars($post['contenido']); ?></p>
        <p><?php echo 'publicado por '. htmlspecialchars($post['nombre_usuario']) . ' en '. htmlspecialchars($post['fecha']); ?></p>
        <a href="edit.php?id=<?php echo $post['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $post['id']; ?>" onclick="return confirm('¿Estás seguro?');">Eliminar</a>
    </div>

<?php endforeach; ?>