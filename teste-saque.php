<?php

use Projeto\Banco\Modelo\Conta\Conta;
use Projeto\Banco\Modelo\Conta\ContaCorrente;
use Projeto\Banco\Modelo\Conta\ContaPoupanca;
use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\Endereco;
use Projeto\Banco\Modelo\CPF;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-12'),
        'Kelvin Dias',
        new Endereco('Rio de Janeiro', 'bairro acúla', 'rua dó', '01')
        
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperaSaldo();