<?php 

namespace Projeto\Banco\Modelo\Conta;

abstract class Conta
{
    //Atributos da Conta
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    //Construct
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }
     //Métodos Mágicos
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    //Métodos

    public function sacar(float $valor): void
    {
        $taxa = $valor * $this->percentualTarifa();
        $tarifa = $valor * (5/100);
        $valorDigitado = $valor;
        $saque = $valor + $taxa;

            if($saque <= 0){
                echo 'Saldo Indisponivel';
                return;
            }elseif($saque > $this->saldo){
                echo 'Saldo Indisponivel';
                return;
            }
            $this->valor = $valorDigitado;
            $this->taxa = $tarifa;
            $this->saldo -= $saque;
            
        
    }

    public function depositar(float $valor): void
    {
        if($valor < 0){
            echo 'Saldo Indisponível';
            return;
        }

        $this->saldo += $valor; 
    }

    // Getters

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaTaxa(): float
    {
        return $this->taxa;
    }

    public function recuperaValorDigitado(): float 
    {
        return $this->valor;
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

    abstract protected function percentualTarifa(): float;
    
}