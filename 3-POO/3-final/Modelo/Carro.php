<?php

namespace Sena\Carz\Modelo;

use Limpador;

class Carro extends Veiculo  implements Limpador
{
    private bool $portaMalas;

    public function __construct(string $marca, string $modelo) {
        parent::__construct($marca, $modelo);
        $this->portaMalas = true;
    }

    protected function ligaVeiculo(): void
    {
        $this->ligado = true;
    }

    public function abrePortaMalas()
    {
        if (!$this->portaMalas) {
            echo 'O porta malas já se encontra aberto.' . PHP_EOL;
        }

        $this->portaMalas = false;
        echo 'O porta malas foi aberto.' . PHP_EOL;
    }

    public function limpaParabrisa(int $nivelDaChuva): void
    {
        if ($nivelDaChuva > 5) {
            echo 'Limpador ativado em velocidade alta';
        }

        echo 'Limpador ativado em velocidade padrão';

    }

}
?>