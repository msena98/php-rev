<?php


class Carro extends Veiculo // através de "extends", nós extendemos a classe Veiculo.
{
    private bool $portaMalas;

    public function __construct(string $marca, string $modelo) {
        parent::__construct($marca, $modelo); // dessa maneira, "chamamos" o construtor da classe "pai", evitando erros.
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