<?php

class Veiculo 
{
    public string $marca;
    public string $modelo;
    public bool $ligado;
    public int $bateria;
    public float $combustivel;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function ligaVeiculo(): void
    {
        $this->ligado = true; 
    }

    public function transfereBateria(Veiculo $veiculo): void
    {
        if($this->bateria < 25) 
        {
            echo 'Não será possível transferir bateria, nível de carga abaixo de 25%' . PHP_EOL;
        }
        $this->bateria -= 10;
        $veiculo->bateria += 10;
    }

}

?>