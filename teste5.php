<?php

use Projeto\Banco\Modelo\Endereco;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\Gerente;

require_once 'autoload.php';


$gerente = new Gerente(
    'Nome Teste',
    new CPF('048.945.763-09'),
    new Endereco('São Bernardo', 'Bairro Teste', 'Rua Teste', 40),
    1000
);

print_r($gerente->recuperaCPF());
echo PHP_EOL;
print_r($gerente->recuperaSalario());

// var_dump($gerente);