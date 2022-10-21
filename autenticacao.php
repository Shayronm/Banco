<?php

use Projeto\Banco\Modelo\Service\Autenticador;
use Projeto\Banco\Modelo\Funcionario\Diretor;
use Projeto\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor('João', 
                        new CPF('123.456.789-02'),
                        new Endereco('Fortaleza', 'Bairro Teste', 'Rua Teste', '30'),
                        10000
);

$autenticador->tentaLogin($diretor, '1234');


