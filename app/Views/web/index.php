<!DOCTYPE html>
<html lang="en">
    <head>
        <?php //echo '<pre>';print_r($metadata);die; ?>
    <?= view('web/components/head',$metadata) ?>
    </head>
    <body class="main-layout">
        <?= view('web/components/body') ?>
        <?= view('web/components/footer') ?>
    </body>
</html>