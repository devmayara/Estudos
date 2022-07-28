<?php

class Calculadora
{
    private $total = 0;
    
    public function add($valor)
    {
        $this->total += $valor;
    }
    
    public function sub($valor)
    {
        $this->total -= $valor;
    }
    
    public function multiply($valor)
    {
        $this->total *= $valor;
    }
    
    public function divide($valor)
    {
        $this->total /= $valor;
    }
    
    public function total()
    {
        return $this->total;
    }
    
    public function clear()
    {
        $this->total = 0;
    }
}
