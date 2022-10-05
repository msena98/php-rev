<?php

/**
 * Aqui estamos criando uma classe Veiculo, para que os outros veiculos se extendam desta clase,
 * concentrando atributos e métodos em comum em apenas 1 única classe, facilitando manutenção de código.
 */
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

    /* Você pode definir métodos e atributos como "protected", somente a classe e suas filhas terão 
    *  acesso ao método ou atributo que for definido assim.
    *  Utilizando "public", permite que todos tenham acesso, até mesmo fora da classe definida.
    *  Já o "private" permite que apenas a própria classe ou classe atual, tenha acesso.
    */
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

}
 //CONTINUAR EM 02 - NAMESPACE E AUTOLOAD VIDEO 1 ------------------------------
?>