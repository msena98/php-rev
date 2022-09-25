<?php

/* subroutine/function
*
* A diferença entre uma subrotina e uma função é que a subrotina não retorna nenhum valor, 
* já a funcão retorna algum dado, apesar de seu comportamento restante ser muito similar.
*/

// subroutine
                // --- \/ aqui específicamos o tipo e se há parâmetros para a function
function exibeMensagem(string $mensagem) : void 
{
    echo $mensagem . PHP_EOL;
} 

// function

function somaNumeros(int $numero1, int $numero2) : int // <- aqui específicamos o tipo de retorno
{
    return $numero1+$numero2;
}

/*
* OBS: Diferentemente de subrotinas, uma função representa o valor calculado por ela depois de sua execução.
*/

function subtraiNumeros(int $numero1, int $numero2) : int
{
    return $numero1-$numero2;
}
$resultado = subtraiNumeros(2, 2);

// SEÇÃO EXTRA ---------------------------------------------------------------------------*

/*
* Ao chamar uma função, informamos os parâmetros de acordo com a ordem indicada pela própria função,
* mas em 2020 o PHP lançou uma RFC que permite a partir do PHP 8, inserir os parâmetros nomeados,
* não sendo necessário informá-los em ordem -> https://wiki.php.net/rfc/named_params
*/

// função exemplo

function divideNumeros(int $numero1, int $numero2) : float
{
    return $numero1 / $numero2 . PHP_EOL;
}

// utilizando parâmetros nomeados para evitar a ordem

echo 'Resultado: ' . divideNumeros(numero2: 2, numero1: 4);

?>