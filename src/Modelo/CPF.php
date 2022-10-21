<?php

namespace Projeto\Banco\Modelo;

class CPF
{
    private string $numero;

    public function __construct(string $numero)
    {
        // Extrai somente os números  // DIDÁTICA É SEMPRE IMPORTANTE
        $numero = preg_replace( '/[^0-9]/is', '', $numero);
        
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($numero) != 11) {
            echo 'O CPF TEM QUE TER 11 DÍGITOS';
            exit();
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $numero)) {
            echo 'CPF INVALIDO! CPF COM NÚMEROS REPETIDOS NÃO EXISTE';
            exit();
        }

        // NÃO MEXA AQUI NEM SE TIVER ALGUEM MORRENDO

        $verificaJ = $numero[9];
        $verificaK = $numero[10];

        $J_letra = 10;
        $J_array = [];
        $J_soma = 0;
        for ($i = 0; $i <= 8; $i++){
            $J_array[] = $numero[$i] * $J_letra;
            $J_letra--;
            $J_soma = $J_soma + $J_array[$i];
        }

        $J_resto = $J_soma % 11;
        $J_subtracao = 11 - $J_resto;

        if ($J_subtracao > 9) {
            $J = 0;
            // echo "J:" . $J . "<br> ";
        } else {
            $J = $J_subtracao;
            // echo "J else:" . $J . "<br>";
        }

        //Conseguindo K
        $K_letra = 11;
        $K_array = [];
        $K_soma = 0;
        for ($ii = 0; $ii <= 9; $ii++){
            $K_array[] = $numero[$ii] * $K_letra;
            $K_letra--;
            $K_soma = $K_soma + $K_array[$ii];
        }

        $K_resto = $K_soma % 11;
        $K_subtracao = 11 - $K_resto;
        if ($K_subtracao > 9) {
            $K = 0;
            // echo "K:" . $K . "<br> ";

        } else {
            $K = $K_subtracao;
            // echo "K:" . $K . "<br> ";
        }

        if ($verificaJ == $J && $verificaK == $K){
            // echo 'CPF VÁLIDO'. PHP_EOL;
            $this->numero = $numero;
        }else{
            echo 'CPF INVÁLIDO';
            exit();
        }
               
    }

       public function recuperaNumero(): string
       {
            return $this->numero;
       }
}