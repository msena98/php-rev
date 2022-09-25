<?php

//while -> repete o laço enquanto a condição for verdadeira, sempre verifica antes de executar o bloco de código

$contador = 0;

while($contador <= 15){
    echo $contador . PHP_EOL;
    $contador++;
}

//for -> une criação do contador, condição e incremento do contador em uma única linha

for ($contador=0; $contador <= 15; $contador++) { 
    echo $contador . PHP_EOL;
}

/* Quando usar for ou whilhe?
*
* Vamos utilizar o while quando não sabemos quando o loop se encerrará.
* Quando é uma decisão um pouco mais complexa. Já o for é utilizado quando sabemos o momento de saída do loop, 
* normalmente, quando temos um caso de uso de variável contadora.
*/

// ---------------- SEÇÃO EXTRA -----------------------------------------------------------------------------*

/* continue/break -> não tão utilizados devido às boas práticas de programação, continue passa para a próxima
*  repetição, enquanto o break, irá encerrar o laço de repetição.
*/

for ($contador=0; $contador <= 15; $contador++) { 
    if ($contador == 12) {
        continue;
    } else {
        echo $contador . PHP_EOL;
    }
}

for ($contador=0; $contador <= 15; $contador++) { 
    if ($contador == 12) { 
        break; // ao chegar nesta condição como verdadeira, o laço é encerreado e o for deixa de ser executado
    } else {
        echo $contador . PHP_EOL;
    }
}

?>