<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="login">
        <form class="form" action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
            <div class="login_form_callback">
                <?= flash(); ?>
            </div>

            <div class="label_2">
                <label>
                    <span class="field">Nome:</span>
                    <input value="<?= $user->first_name; ?>" type="text" name="first_name"
                           placeholder="Primeiro nome:"/>
                </label>

                <label>
                    <span class="field">Sobrenome:</span>
                    <input value="<?= $user->last_name; ?>" type="text" name="last_name"
                           placeholder="Último nome:"/>
                </label>
            </div>

            <label>
                <span class="field">E-mail:</span>
                <input value="<?= $user->email; ?>" type="email" name="email"
                       placeholder="Informe seu e-mail:"/>
            </label>

            <label>
                <span class="field">Senha:</span>
                <input autocomplete="" type="password" name="passwd"
                       placeholder="Informe sua senha:"/>
            </label>

            <div class="form_actions">
                <button class="btn btn-green btn-full">Criar Conta</button>
            </div>
        </form>

        <div class="form_register_action">
            <p>Já tem conta?</p>
            <a href="<?= $router->route("web.login"); ?>" class="btn btn-blue">Fazer Login</a>
        </div>
    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>
