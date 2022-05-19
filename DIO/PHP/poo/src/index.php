<?php 

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':

        echo '<h3>Lista de produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }

        break;

    case 'insert':

        $status = $produto->insert('Produto Teste da Mayara Silva 01');

        if (!$status) {
            echo 'Erro ao inserir produto!';
            return false;
        } 
        
        echo 'Produto inserido com sucesso!';
        
        break;

    case 'update':

        $status = $produto->update('Produto Alterado da Mayara Silva 02', 2);

        if (!$status) {
            echo 'Erro ao atualizar produto!';
            return false;
        } 
        
        echo 'Produto atualizado com sucesso!';
        
        break;

    case 'delete':
       
        $status = $produto->delete(2);

        if (!$status) {
            echo 'Erro ao deletar produto!';
            return false;
        } 
        
        echo 'Produto deletado com sucesso!';
        
        break;
}
