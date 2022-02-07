<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>

    <link rel="stylesheet" href="<?= asset("/css/style.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/form.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/button.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/message.css"); ?>"/>
    <link rel="stylesheet" href="<?= asset("/css/load.css"); ?>"/>
    <link rel="icon" type="image/png" href="<?= asset("/images/favicon.png"); ?>"/>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <div class="ajax_load_box_title">Aguarde, carrengando...</div>
    </div>
</div>

<main class="main_content">
    <?= $v->section("content"); ?>
</main>

<script src="<?= asset("/js/jquery.js"); ?>"></script>
<script src="<?= asset("/js/jquery-ui.js"); ?>"></script>
<?= $v->section("scripts"); ?>

</body>
</html>
