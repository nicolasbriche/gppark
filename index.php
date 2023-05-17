<?php $title = "GP Park"; ?>

<?php ob_start(); ?>
<div class="choice">
    <a href="loisir.php" class="choice--loisir choice--item">LOISIR</a>
    <a href="academy.php" class="choice--academy choice--item">ACADEMY</a>
    <div class="choice--background"></div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require("template/layout.php") ?>