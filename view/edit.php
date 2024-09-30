<?php
require '../controller/edit.php';
?>


<form method="POST">
    <input type="text" name="title" value="<?php echo htmlspecialchars($post['titulo']);?>" placeholder="Ingrese un nuevo titulo">
    <textarea name="content"><?php echo htmlspecialchars($post['contenido']); ?> </textarea>
    <button type="submit">Actualizar</button>
</form>