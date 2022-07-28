<?php $render('header'); ?>

<a href="<?= $base; ?>/">[Início]</a>
<a href="<?= $base; ?>/novo">[Novo Usuário]</a>

<hr>

<h2>Editando Usuário</h2>

<form action="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="name" id="nome" value="<?= $usuario['nome']; ?>" />
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?= $usuario['email']; ?>" />
    <br><br>
    <input type="submit" value="Salvar" />
</form>

<?php $render('footer'); ?>
