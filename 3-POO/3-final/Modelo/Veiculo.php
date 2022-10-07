<?php

namespace Sena\Carz\Modelo;

abstract class Veiculo // definindo classe como abstrata, podendo definir métodos abstratos p/ serem implementados nas filhas
{
    private string $marca;
    private string $modelo;
    protected bool $ligado;
    private int $bateria;
    protected float $combustivel;
    protected float $quilometragem;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    abstract protected function ligaVeiculo(): void; // métodos abstratos DEVEM ser implementados nas classes filhas

    protected function transfereBateria(Veiculo $veiculo): void
    {
        if($this->bateria < 25) 
        {
            echo 'Não será possível transferir bateria, nível de carga abaixo de 25%' . PHP_EOL;
        }
        $this->bateria -= 10;
        $veiculo->bateria += 10;
    }

    public function recuperaMarca(): string
    {
       return $this->marca;
    }

    public function recuperaModelo(): string
    {
       return $this->modelo;
    }

}

?>