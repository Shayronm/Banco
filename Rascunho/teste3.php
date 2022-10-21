<?php

contagem(30);
function contagem($num)
{
    if($num != 0)
    {
        $tempo = $num - 1;
        date_default_timezone_set('America/Fortaleza');
        echo date('d/m/Y H:i:s');
        echo PHP_EOL;
        echo "Sua assinatura acabará em $num segundos";
        sleep(1);
        echo PHP_EOL;
        contagem($tempo);
        exit();
    }
    echo PHP_EOL;
    echo date('d/m/Y H:i:s');
    echo PHP_EOL;
    echo 'Seu tempo de assinatura acabou!';
    
}
