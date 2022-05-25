<?php 

class Venda
{
    private $data;
    private $produtos;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produtos, $quantidade, $valorTotal)
    {
        $this->data = $data;
        $this->produtos = $produtos;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function obterVenda()
    {
        return 'Data da venda: ' . $this->data . '<br>' .
               'Produtos: ' . $this->produtos . '<br>' .
               'Quantidade: ' . $this->quantidade . '<br>' .
               'Valor total: R$ ' . $this->valorTotal;
    }
}

$venda1 = new Venda(
    '01/01/2019',     // $data
    'Produto 1',      // $produtos
    '2',              // $quantidade
    '100.00'          // $valorTotal
);


var_dump($venda1);
