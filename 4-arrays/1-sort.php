<?php

$consumo = [7.5, 8.2, 9.5, 6.2];

$consumoCrescente = $consumo;

/*sort() -> Por padrão, ordena o array numérico de forma crescente, não retorna nada, modifica o próprio array
* Caso fosse um array com dados do tipo string, seria ordenado em ordem alfabética, por padrão. */

sort($consumoCrescente); 

var_dump($consumoCrescente);

//--------------------------------------------------------------------------------------------------------------

$carros = [
    [
        'Marca' => 'Ford',
        'Modelo' => 'Mustang',
        'Ano' => 1976,
        'Velocidade maxima' => 260
    ],
    [
        'Marca' => 'Honda',
        'Modelo' => 'Civic',
        'Ano' => 1994,
        'Velocidade maxima' => 220
    ],
    [
        'Marca' => 'BMW',
        'Modelo' => '320i',
        'Ano' => 2022,
        'Velocidade maxima' => 320
    ]
];

function OrdenaPorVelocidadeMaxima(array $carro1, array $carro2): int
{
    if ($carro1['Velocidade maxima'] > $carro2['Velocidade maxima']) { // se a primeira velocidade for maior, será trocada
        return 1;
    }

    if ($carro2['Velocidade maxima'] > $carro1['Velocidade maxima']) { // se a segunda velocidade for maior, será mantida
        return -1;
    }

    return 0; // se as velocidades forem iguais, nada será trocado

    //DICA EXTRA(operador "espaçonave": <=> "): Já faz toda a comparação acima, no nosso caso em ordem crescente.

    // return $carro1['Velocidade maxima'] <=> $carro2['Velocidade maxima'];

}

$carrosPorVelocidade = $carros;
usort($carrosPorVelocidade, 'OrdenaPorVelocidadeMaxima');

var_dump($carrosPorVelocidade);

?>