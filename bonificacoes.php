<?php

require_once 'autoload.php';

use Projeto\Banco\Modelo\Funcionario\{Gerente, Diretor};
use Projeto\Banco\Modelo\{CPF, Endereco};
use Projeto\Banco\Modelo\Service\ControleDeBonificacao;

$funcionario = new Gerente      ('Rabelo Andrade', 
                                new CPF('123.456.789-00'),
                                new Endereco('São Paulo', 'bairro teste', 'rua teste', '37'),
                                1000);


$funcionaria = new Diretor     ('Paola Andrade', 
                                new CPF('123.456.789-01'),
                                new Endereco('Rio de Janeiro', 'bairro teste', 'rua teste', '37'),
                                3000);

$controlador = new ControleDeBonificacao();
$controlador->adicionaBonificacaoDe($funcionario);
$controlador->adicionaBonificacaoDe($funcionaria);

echo $controlador->recuperaTotal();