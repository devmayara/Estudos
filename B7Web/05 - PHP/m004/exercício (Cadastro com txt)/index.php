<form method="POST">
    <label>
    Novo Nome:</br>
    <input type="text" name="nome" required>
    <input type="submit" value="Adicionar">
    </label>
</form>

<h2> Lista de Nomes </h2>
<?php
    /* Exercicio Prático */
   
    $lista = file_get_contents('lista.txt');
    $lista .= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS).",";
    file_put_contents("lista.txt", $lista);

   
    $lista = explode(",", $lista); //transforma os elementos em array

    foreach ($lista as $key => $value) {
        if($lista[$key] !== ""){
            ?>
            <ul>
                <li><?php echo $value; ?> </li>
            </ul><?php
         }
    }
   