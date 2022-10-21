<?php

namespace Projeto\Banco\Modelo\Service;

use Projeto\Banco\Modelo\Funcionario\Funcionario;

class ControleDeBonificacao
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}