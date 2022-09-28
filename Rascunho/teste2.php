<?php

class Copo
{

    public function __construct()
    {
        $this->capacidade = 5; // 5 litros...
        $this->contador = 0; // o copo começa vazio...
        $this->copo = []; // copo criado sem skin...
        
    }

    public function insereLiquido($argumento)
    {   //condição que verifica se o copo tem condições de receber mais liquido.
        if($this->contador >= $this->capacidade)
        {
            echo "Pilha excedeu sua capacidade e mais valores não podem ser inseridos";
        }
        else
        {
            $this->copo[$this->contador] = $argumento;
            $this->contador++;
        }
    }
}

$copo = new Copo(5, 0, []);
$copo->insereLiquido(1.0);
$copo->insereLiquido(2.0);
$copo->insereLiquido(3.0);
$copo->insereLiquido(4.0);
$copo->insereLiquido(5.0);
print_r($copo);
