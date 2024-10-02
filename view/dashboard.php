<?php 
require "../controller/dashboard.php";
require "header.php";

?>


<section class="body welcome">
    <h1>Bienvenido <?php echo $_SESSION['nombre_usuario'];?>!</h1>
</section>

<section class="body post">
    <div class="welcome"><h2>Publicaciones</h2></div>
    <?php foreach($posts as $post): ?>
        <div class="container-post">
            <h3><?php echo htmlspecialchars($post['titulo']) ; ?></h3>
            <p><?php echo htmlspecialchars($post['contenido']); ?></p>
            <p><?php echo 'publicado por '. htmlspecialchars($post['nombre_usuario']) . ' en '. htmlspecialchars($post['fecha']); ?></p>
            <a href="edit.php?id=<?php echo $post['id']; ?>">Editar</a>
            <a href="../controller/delete.php?id=<?php echo $post['id']; ?>" onclick="return confirm('¿Estás seguro?');">Eliminar</a>
        </div>

    <?php endforeach; ?>
</section>

<?php require 'footer.php' ?>