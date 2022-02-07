<?php $v->layout("theme/_theme"); ?>

<div class="page">
    <h1>Ooops, erro <?= $error; ?></h1>
    <p>Desculpe por isso, caso o problema persista, por favor entre em contato conosco.</p>
    <p><a class="btn btn-blue" href="<?= $router->route("web.login"); ?>" title="<?= site("name"); ?>">VOLTAR!</a></p>
</div>