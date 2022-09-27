<?php 

require_once 'autoload.php';

use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;
use Projeto\Banco\Modelo\Conta\Conta;
use Projeto\Banco\Modelo\Conta\Titular;

echo "CONTAS: \n\n";

$endereco1 = new Endereco('Juazeiro do Norte', 'Jardim Gonzaga', 'José Bezerra da Silva', '29B');
$conta1 = new Conta(new Titular(new CPF('123.456.789-01'), 'Ana Paula', $endereco1));
$conta1->depositar(300);

$endereco2 = new Endereco('Barbalha', 'Jardim Botanico', 'José Alencar', '35A');
$conta2 = new Conta(new Titular(new CPF('123.456.789-02'), 'Tolvard', $endereco2));
$conta2->depositar(200);

$endereco3 = new Endereco('Crato', 'Alto da Serra', 'Alberto Fonema', '21A');
$conta3 = new Conta(new Titular(new CPF('123.456.789-03'), 'Sousa', $endereco3));
$conta3->depositar(200);

$endereco4 = new Endereco('Barbalha', 'Colina', 'Ricardo Americo', '2155');
$conta4 = new Conta(new Titular(new CPF('123.456.789-04'), 'Felipe', $endereco4));
$conta4->depositar(200);
var_dump($conta4);

echo 'CPF: '. $conta1->recuperaTitularCpf(). "\n";
echo 'Nome do Titular: '. $conta1->recuperaNomeTitular(). "\n";
echo 'Saldo: '. $conta1->recuperaSaldo(). "\n";
echo "\n";
echo "---------------------------------------------------------------------------------------------";
echo "\n \n";
echo 'CPF: '. $conta2->recuperaTitularCpf(). "\n";
echo 'Nome do Titular: '. $conta2->recuperaNomeTitular(). "\n";
echo 'Saldo: '. $conta2->recuperaSaldo(). "\n";
echo "\n";
echo "---------------------------------------------------------------------------------------------";
echo "\n";
echo 'CPF: '. $conta3->recuperaTitularCpf(). "\n";
echo 'Nome do Titular: '. $conta3->recuperaNomeTitular(). "\n";
echo 'Saldo: '. $conta3->recuperaSaldo(). "\n";
echo "\n";
echo "---------------------------------------------------------------------------------------------";
echo "\n";
echo 'CPF: '. $conta4->recuperaTitularCpf(). "\n";
echo 'Nome do Titular: '. $conta4->recuperaNomeTitular(). "\n";
echo 'Saldo: '. $conta4->recuperaSaldo(). "\n";
echo "\n";
echo "---------------------------------------------------------------------------------------------";
echo "\n";
echo 'Total de Contas: '. Conta::mostraNumeroDeContas(). PHP_EOL;
echo "\n";
echo "---------------------------------------------------------------------------------------------";
//unset($conta2);