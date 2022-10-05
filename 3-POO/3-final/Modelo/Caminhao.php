<?php

namespace Sena\Carz\Modelo; // Aqui definimos um namespace, assim evitamos conflitos de nomes entre classes.

class Caminhao extends Veiculo
{
    private readonly string $motorista; 
    private float $capacidade;
    private string $eixos;

    public function __construct(string $marca, string $modelo, string $motorista, float $capacidade, string $eixos) {
        parent::__construct($marca, $modelo);
        $this->motorista = $motorista;
        $this->capacidade = $capacidade;
        $this->eixos = $eixos;
    }

}

?>