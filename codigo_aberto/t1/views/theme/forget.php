<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="login">
        <form class="form" action="<?= $router->route("auth.forget"); ?>" method="post" autocomplete="off">
            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <label>
                <span class="field">E-mail:</span>
                <input value="" type="email" name="email" placeholder="Informe seu e-mail:"/>
            </label>

            <div class="form_actions">
                <button class="btn btn-green btn-full">Recuperar Minha Senha</button>
            </div>
        </form>

        <div class="form_register_action">
            <p>Você também pode:</p>
            <a href="<?= $router->route("web.login"); ?>" class="btn btn-blue">Voltar ao Login</a>
        </div>
    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>
