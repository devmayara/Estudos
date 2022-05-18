<?php

declare (strict_types=1);

class ContaBancaria
{
    // modificador de acesso: public, private, protected
    /**
     * @var string
     */
    private $banco;

    /**
     * @var string
     */
    private $nomeTitular;

    /**
     * @var string
     */
    private $numeroAgencia;

    /**
     * @var string
     */
    private $numeroConta;

    /**
     * @var float
     */
    private $saldo;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo() :string
    {
        return 'Seu saldo atual é: R$ ' . $this->saldo;
    }

    public function depositar(float $valor) :string
    {
        $this->saldo += $valor;
        return 'Depósito de R$ ' . $valor . ' realizado com sucesso!';
    }

    public function sacar(float $valor) :string
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado com sucesso!';
    }
}

$conta1 = new ContaBancaria(
    'Banco do Brasil',     // $banco
    'Joao da Silva',       // $nomeTitular
    '1234',                // $numeroAgencia
    '1234567-89',          // $numeroConta
    0                      // $saldo
);

$conta2 = new ContaBancaria(
    'Banco Caixa Economica',     // $banco
    'Maria da Silva',            // $nomeTitular
    '1234',                      // $numeroAgencia
    '9876543-21',                // $numeroConta
    300.00                       // $saldo
);

echo $conta2->obterSaldo();

echo '<br><br>';
echo $conta2->depositar(300.50);

echo '<br>';
echo $conta2->obterSaldo();

echo '<br><br>';
echo $conta2->sacar(150.00);

echo '<br>';
echo $conta2->obterSaldo();