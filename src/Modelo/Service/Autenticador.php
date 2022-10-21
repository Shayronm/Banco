<?php

namespace Projeto\Banco\Modelo\Service;

use Projeto\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
        if($diretor->podeAutenticar($senha)){
            echo "Login efetuado com sucesso.";
        }else{
            echo "Senha incorreta";
        }
    }
}