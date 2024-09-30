<?php 
require "../controller/dashboard.php";

?>


<h1>Bienvenido <?php echo $_SESSION['nombre_usuario'];?>!</h1>
<a href="../controller/logout.php">Cerrar sesión</a>
<a href="create_post.php">Crear nueva publicación</a>
<h2>Publicaciones</h2>

<?php foreach($posts as $post): ?>
    <div>
        <h3><?php echo htmlspecialchars($post['titulo']) ; ?></h3>
        <p><?php echo htmlspecialchars($post['contenido']); ?></p>
        <p><?php echo 'publicado por '. htmlspecialchars($post['nombre_usuario']) . ' en '. htmlspecialchars($post['fecha']); ?></p>
        <a href="edit.php?id=<?php echo $post['id']; ?>">Editar</a>
        <a href="../controller/delete.php?id=<?php echo $post['id']; ?>" onclick="return confirm('¿Estás seguro?');">Eliminar</a>
    </div>

<?php endforeach; ?>