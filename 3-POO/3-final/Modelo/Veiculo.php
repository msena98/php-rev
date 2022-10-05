<?php

namespace Sena\Carz\Modelo;

class Veiculo 
{
    private string $marca;
    private string $modelo;
    private bool $ligado;
    private int $bateria;
    private float $combustivel;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    protected function ligaVeiculo(): void  
    {
        $this->ligado = true; 
    }

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