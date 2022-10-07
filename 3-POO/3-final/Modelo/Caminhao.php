<?php

namespace Sena\Carz\Modelo; // Aqui definimos um namespace, assim evitamos conflitos de nomes entre classes.

use Limpador;

class Caminhao extends Veiculo implements Limpador
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

    protected function ligaVeiculo(): void
    {
        $this->ligado = true;
    }
    
    public function limpaParabrisa(int $nivelDaChuva): void
    {
        if ($nivelDaChuva > 8) {
            echo 'Limpador ativado em velocidade alta';
        }

        echo 'Limpador ativado em velocidade padrão';

    }
}

?>