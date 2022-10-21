<?php

namespace Projeto\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir(Conta $conta, float $valor): void
    {
        if($valor > $this->saldo){
            echo "Saldo Indisponível";
            return;
        }
        
        $this->sacar($valor);
        $conta->depositar($valor);
        
    }
}