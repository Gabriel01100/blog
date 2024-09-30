<?php
require '../controller/create_post.php'
?>
<form method="POST">
    <input type="text" placeholder="title" name="title">
    <textarea name="content" id="" placeholder="Postea algo"></textarea>
    <button type="submit">Postear</button>
</form>