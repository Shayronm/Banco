<?php 

namespace Projeto\Banco\Modelo\Conta;

class Conta
{
    //Atributos da Conta
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    //Construct
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    //Métodos

    public function sacar(float $valor): void
    {
        if($valor <= 0){
            echo 'Saldo Indisponível';
            return;
        }elseif($valor > $this->saldo){
            echo 'Saldo Indisponível';
            return;
        }

        $this->saldo -= $valor;
    }

    public function depositar(float $valor): void
    {
        if($valor < 0){
            echo 'Saldo Indisponível';
            return;
        }

        $this->saldo += $valor; 
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

    // Getters

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string 
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaTitularCpf(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function mostraNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}