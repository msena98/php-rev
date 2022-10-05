<?php

namespace Sena\Carz\Modelo;

class Carro extends Veiculo 
{
    private bool $portaMalas;

    public function __construct(string $marca, string $modelo) {
        parent::__construct($marca, $modelo);
        $this->portaMalas = true;
    }

    public function abrePortaMalas()
    {
        if (!$this->portaMalas) {
            echo 'O porta malas já se encontra aberto.' . PHP_EOL;
        }

        $this->portaMalas = false;
        echo 'O porta malas foi aberto.' . PHP_EOL;
    }

}
?>