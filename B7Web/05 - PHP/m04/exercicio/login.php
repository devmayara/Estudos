<?php

session_start();

?>

<html>
    <head>
        <title>Formulário de Login</title>
    </head>
    <body>
        <h1>Qual seu nome?</h1>

        <?php 
            // Essa parte do código vai apenas exibir erros, se o usuário não enviar nome por exemplo
            if (!empty($_SESSION['erro'])) {
                echo $_SESSION['erro'];

                // Na linha abaixo, destruimos a variavel depois de exibir o erro.
                unset($_SESSION['erro']);
            }
        ?>

        <form action="formulario.php" method='POST'>
            <input type='text' name='nome' required>
            <br>
            <input type='submit' value='salvar'>
        </form>
    </body>
</html>
