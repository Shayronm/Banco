<?php
// function ready($limite)
// {
//     $m3 = 0;
//     $m5 = 0;
    
//     for($i = 0; $i < 1000; $i++ ){
//         if($i % 3 == 0){
//             $m3 += $i;
//         }elseif($i % 5 == 0){
//             $m5 += $i;
//         }
//     }
//     echo $m3 + $m5;
// }

// ready(1000);


// $termo1 = 0;
// $termo2 = 1;
// $soma = 0;

// while($termo2 < 4000000 && $termo1 < 4000000){
//         $termo1 = $termo2 + $termo1;
//     echo " \n";
//         $termo2 = $termo1 - $termo2;
//     echo " \n \n";
//         "SOMA: ". $soma = $termo1 + $termo2;
//     echo " ";
//     if($soma % 2 == 0){
//         echo " \n";
//         echo "PAR: ". $soma;
//     }
// }



// public function definaCpf(string $cpf): void
    // {
    //     $this->cpfTitular = $cpf;
    // }


retorno(0);
function retorno($num)
{
    if($num < 100)
    {
        echo $num;
        echo PHP_EOL;
        sleep(1);
        retorno($num + 1);
        
    }
}

retorn(100);
function retorn($num)
{
    if($num =! 0)
    {
        echo $num;
        echo PHP_EOL;
        sleep(1);
        retorno($num - 1);
    }
}

