<?php

class Caminhao
{
    private readonly string $motorista; 
    private float $capacidade;
    private string $eixos;

    public function __construct(string $motorista, float $capacidade, string $eixos) {
        $this->capacidade = $capacidade;
        $this->eixos = $eixos;
    }
}

?>