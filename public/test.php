<?php

ob_start();
?>

<? $content = ob_get_clean(); ?>

<html>
    <?php $content; ?>
</html>