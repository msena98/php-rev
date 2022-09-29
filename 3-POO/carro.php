<?php

/* Definindo os atributos da classe Carro de acordo com o pilar de Abstração da POO, 
* que significa abstrair informações/funcionamentos de situações no mundo real, de uma forma
* otimizada para o que necessitamos em nosso sistema, caso deseje ver mais a respeito acesse:
* https://pt.wikipedia.org/wiki/Abstra%C3%A7%C3%A3o_%28ci%C3%AAncia_da_computa%C3%A7%C3%A3o%29
*/
class Carro 
{
    public string $marca;
    public string $modelo;
    public bool $ligado;
    public int $bateria;

/* Métodos:
* Definem os comportamentos do nosso objeto, onde todo objeto istanciado a partir desta classe(Carro),
* irá herdar esses métodos e pode os reescrever também, caso seja necessário.
*/
    public function ligarCarro(): void
{
    $this->ligado = true; //$this se refere ao objeto que "chamou" o método
}

}
?>