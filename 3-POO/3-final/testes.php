<?php

require_once 'autoload.php';

use Sena\Carz\Modelo\Carro;

$lancer = new Carro('Mitsubishi', 'Lancer Evo X');

echo $lancer->recuperaMarca();