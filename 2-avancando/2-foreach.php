<?php 

// criação do array associativo

$marcasDeCarros = [
    'Volkswagen' => [
        'Polo',
        'Gol',
        'Santana'
    ],
    'Ford' => [
        'Focus',
        'Ranger',
        'Eco Sport'
    ],
    'Honda' => [
        'Civic',
        'Fit',
        'HRV'
    ]
];

// foreach -> "para cada" item do array como $x faça {...}, não precisamos conhecer as chaves de cada array/item para percorrer seus valores

foreach($marcasDeCarros as $marca) {
    echo $marca[0] . PHP_EOL; // irá imprimir para cada marca, seu primeiro veículo "registrado"
}

?>
