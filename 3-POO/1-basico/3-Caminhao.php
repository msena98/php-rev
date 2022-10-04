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
    *  Método construtor __construct():
    * Este método é "chamado" toda vez que um objeto da classe é instanciado("criado"), através dele
    * tornamos obrigatório o envio de informações para instanciar o objeto, ou será retornado um fatal error.
    */
    public function __construct(string $motorista, float $capacidade, string $eixos) {
        $this->motorista = $motorista;
        $this->capacidade = $capacidade;
        $this->eixos = $eixos;
    }

    /*
    *  Propety   promotion (PHP 8+):
    * Para facilitar e evitar ter que escrever várias vezes os atributos da classe, tanto em sua definição de atributos, 
    * como nos construtor, foi criada a RFC: Constructor Property Promotion, onde podemos definir os atributos da classe
    * e ao mesmo tempo definir seu construtor:
    *
    * class Caminhao
    * {
        public function __construct(
            private readonly string $motorista, 
            private float $capacidade,
            private string $eixos,
        ) {}
    * }
    *
    * Para saber mais, acesse: https://wiki.php.net/rfc/constructor_promotion
    */
}

?>