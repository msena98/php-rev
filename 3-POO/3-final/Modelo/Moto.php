<?php

namespace Sena\Carz\Modelo;

class Moto extends Veiculo
{
    private string $guidao;

    public function __construct(string $marca, string $modelo) {
        parent::__construct($marca, $modelo);
    }

    protected function ligaVeiculo(): void
    {
        $this->ligado = true;
    }

    public function recuperaGuidao() : string
    {
        return $this->guidao;
    }
    
    public function defineGuidao($guidao): void
    {
        $this->guidao = $guidao;
    }
}
?>