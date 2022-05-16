<?php

declare(strict_types=1);

function validarNome(string $nome) :bool {
    if (empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio!');
        return false;
    }
    else if (strlen($nome) < 3) {
        setarMensagemErro('O nome deve ter mais de 3 caracteres!');
        return false;
    }
    else if (strlen($nome) > 40) {
        setarMensagemErro('O nome é muito extenso!');
        return false;
    }
    return true;
}

function validarIdade(string $idade) :bool {
    if (!is_numeric($idade)) {
        setarMensagemErro('Informe o número da idade!');
        return false;
    }
    return true;
}
