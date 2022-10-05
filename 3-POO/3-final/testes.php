<?php

require_once 'Modelo/Veiculo.php';
require_once 'Modelo/Carro.php';

use Sena\Carz\Modelo\Carro;

$lancer = new Carro('Mitsubishi', 'Lancer Evo X');

echo $lancer->recuperaMarca();