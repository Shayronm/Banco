<?php

namespace Projeto\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco, string $cargo)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function editaNomeFuncionario(string $nome): void
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }
}

