<?php
// permitindo trabalhar com varios tipos de banco de dados
interface Database {    // desnecessário - só para organização.
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
    public function excluirProduto();
}

class MysqlDB implements Database {

    // leitura
    public function listarProdutos() {

    }
  
    // escrita
    public function adicionarProduto() {
        echo "Adicionando produto no banco de dados com Mysql";
    }
  
    // alteração
    public function alterarProduto() {

    }
  
    // exclusão
    public function excluirProduto() {

    }

}

class OracleDB implements Database {

    // leitura
    public function listarProdutos() {

    }
  
    // escrita
    public function adicionarProduto() {
        echo "Adicionando produto no banco de dados com Oracle";
    }
  
    // alteração
    public function alterarProduto() {

    }
  
    // exclusão
    public function excluirProduto() {

    }

}
// so escolher um banco de dados
$db = new OracleDB();
$db->adicionarProduto();
