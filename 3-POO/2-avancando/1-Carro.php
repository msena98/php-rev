<?php


class Carro 
{
    public string $marca;
    public string $modelo;
    public bool $ligado;
    public int $bateria;

    public function ligarCarro(): void
    {
        $this->ligado = true; 
    }


    public function transferirBateria(Carro $carro): void
    {
        if($this->bateria < 25) 
        {
            echo 'Não será possível transferir bateria, nível de carga abaixo de 25%' . PHP_EOL;
        }
        $this->bateria -= 10;
        $carro->bateria += 10;
    }

}
?>