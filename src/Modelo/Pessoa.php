<?php

namespace Projeto\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;
    protected Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    protected function validarNomeTitular(string $nomeTitular): void
    {
        if(strlen($nomeTitular) < 5){
            echo 'Nome precisa ter pelo menos 5 caractere';
            exit();
        }
    }
}


