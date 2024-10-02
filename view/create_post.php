<?php
require '../controller/create_post.php';
require 'header.php';
?>


<form method="POST">
    <input type="text" placeholder="title" name="title" require>
    <textarea name="content" id="" placeholder="Postea algo" require></textarea>
    <button type="submit">Postear</button>
</form>