<?php

$lista = [1,2,3,4];
$lista2 = [5,6,7,8,9,10];
$lista3 = '';

if(is_array($lista2))
{
    echo 'É ARRAY'. PHP_EOL;
    
}else{
    echo 'NÃO É ARRAY';
}

print_r(array_merge_recursive($lista, $lista2));

// foreach($lista as $chave => $valor)
// {
//     echo $chave. " => ". $valor. PHP_EOL;
// }