<?php

class Caminhao extends Veiculo
{
    private readonly string $motorista; 
    private float $capacidade;
    private string $eixos;

    public function __construct(string $motorista, float $capacidade, string $eixos) {
        $this->motorista = $motorista;
        $this->capacidade = $capacidade;
        $this->eixos = $eixos;
    }
}

?>