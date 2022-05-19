<?php 

require 'Blog.php';

$post = new Blog();

switch ($_GET['operacao']) {

    case 'list':

        echo '<h3>Lista de post: </h3>';

        foreach ($post->list() as $value) {
            echo 'Id: ' . $value['id'] . '<br> Titulo: ' . $value['titulo'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }

        break;

    case 'insert':

        $status = $post->insert('Teste 4', 'Post Adicionado da Mayara Silva 04');

        if (!$status) {
            echo 'Erro ao inserir post!';
            return false;
        } 
        
        echo 'Post inserido com sucesso!';
        
        break;

    case 'update':

        $status = $post->update('Post Alterado 2', 4);

        if (!$status) {
            echo 'Erro ao atualizar post!';
            return false;
        } 
        
        echo 'post atualizado com sucesso!';
        
        break;

    case 'delete':
       
        $status = $post->delete(4);

        if (!$status) {
            echo 'Erro ao deletar post!';
            return false;
        } 
        
        echo 'Post deletado com sucesso!';
        
        break;
}
