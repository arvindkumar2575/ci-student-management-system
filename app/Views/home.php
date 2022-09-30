<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php 
    $session = session();
    $dat = $session->getFlashdata("message")??"No message";
    echo $dat;
    $data = "Arvind Kumar"
    ?>
    <h2>This is <?= $data ?> hh</h2>
    <h4>This is h4 text</h4>
    <?= $bs_url ?>
</body>
</html>