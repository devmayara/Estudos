<?php $render('header'); ?>

<a href="<?= $base; ?>/">[Início]</a>

<hr>

<h2>Adicionar Novo Usuário</h2>

<form action="<?= $base; ?>/novo" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="name" id="nome" placeholder="Nome Completo" />
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="exemplo@email.com" />
    <br><br>
    <input type="submit" value="Adicionar" />
</form>

<?php $render('footer'); ?>
