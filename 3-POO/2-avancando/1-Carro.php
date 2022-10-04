<?php


class Carro extends Veiculo
{
    private bool $portaMalas;

    public function abrePortaMalas()
    {
        if ($this->portaMalas) {
            echo 'O porta malas já se encontra aberto.';
        }

        $this->portaMalas = false;
        echo 'O porta malas foi aberto.';
    }

}
?>