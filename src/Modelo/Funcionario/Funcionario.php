<?php

namespace Projeto\Banco\Modelo\Funcionario;

use Projeto\Banco\Modelo\{Pessoa, CPF, Endereco};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco, float $salario)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->salario = $salario;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }
    
    protected function editaNomeFuncionario(string $nome): void
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }

    abstract public function calculaBonificacao();
}

