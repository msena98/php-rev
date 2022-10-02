<?php

class Caminhao
{
    private readonly string $motorista; 
    /*         /\ aqui definimos o atributo como readonly(PHP 8+), assim só será permitido defini-lo 1x,
    *             para saber mais acesse: https://www.youtube.com/watch?v=u5hge87rCCQ
    */
    private float $capacidade;
    private string $eixos;

    /*
    * Método construtor __construct():
    * Este método é "chamado" toda vez que um objeto da classe é instanciado("criado"), através dele
    * tornamos obrigatório o envio de informações para instanciar o objeto, ou será retornado um fatal error.
    */
    public function __construct(string $motorista, float $capacidade, string $eixos) {
        $this->capacidade = $capacidade;
        $this->eixos = $eixos;
    }
}

?>