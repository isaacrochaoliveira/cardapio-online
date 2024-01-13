<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LoveChurch</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= URL_BASE ?>assets/framework/semantice-ui/semantic.min.css"/>;;
    </head>
    <body>
        <?php
        include "menu.php"
        ?>
        <div class="base-geral" id="base_geral">
            <?php $this->load($view, $viewData) ?>
        </div>
        <?php
        include "rodape.php";
        ?>
        <link rel="stylesheet" href="<?= URL_BASE ?>assets/framework/semantice-ui/semantic.min.js"/>
    </body>
</html>
