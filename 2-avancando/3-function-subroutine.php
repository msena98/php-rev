<?php

/* subroutine/function
*
* A diferença entre uma subrotina e uma função é que a subrotina não retorna nenhum valor, 
* já a funcão retorna algum dado, apesar de seu comportamento restante ser muito similar.
*/

// subroutine

function exibeMensagem(string $mensagem) : void // aqui específicamos o tipo de retorno
{
    echo $mensagem . PHP_EOL;
} 

// function

function somaNumeros(int $numero1, int $numero2) : int
{
    return $numero1+$numero2;
}

?>