<?php

function defineCetegoriaCompetidor(string $nome, string $idade) : ?string {

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';

    if (validarNome($nome) && validarIdade($idade)) {

        removerMensagemErro();
        
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == 'Infantil') {
                    setarMensagemSucesso('O nadador ' . $nome . ' tem ' . $idade . ' anos e compete na categoria: ' . $categorias[$i] . '<br>');
                    return null;
                }
            }
        } elseif ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == 'Adolescente') {
                    setarMensagemSucesso('O nadador ' . $nome . ' tem ' . $idade . ' anos e compete na categoria: ' . $categorias[$i] . '<br>');
                    return null;
                }
            }
        } else {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == 'Adulto') {
                    setarMensagemSucesso('O nadador ' . $nome . ' tem ' . $idade . ' anos e compete na categoria: ' . $categorias[$i] . '<br>');
                    return null;
                }
            }
        }
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == 'Infantil') {
                    setarMensagemSucesso('O nadador ' . $nome . ' tem ' . $idade . ' anos e compete na categoria: ' . $categorias[$i] . '<br>');
                    return null;
                }
            }
        } elseif ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == 'Adolescente') {
                    setarMensagemSucesso('O nadador ' . $nome . ' tem ' . $idade . ' anos e compete na categoria: ' . $categorias[$i] . '<br>');
                    return null;
                }
            }
        } else {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == 'Adulto') {
                    setarMensagemSucesso('O nadador ' . $nome . ' tem ' . $idade . ' anos e compete na categoria: ' . $categorias[$i] . '<br>');
                    return null;
                }
            }
        }
    }
    else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
