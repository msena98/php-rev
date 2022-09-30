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

/* Métodos com referência:
* Recebemos uma referência de outro objeto e realizamos alterações em seus atributos.
*/
public function transferirBateria(Carro $carro): void
{
    if($this->bateria < 25) 
    {
        echo 'Não será possível transferir bateria, nível de carga abaixo de 25%' . PHP_EOL;
    }
    $this->bateria -= 10;
    $carro->bateria += 10; // <- alterando o atributo do objeto recebido por referência

    /* Talvez você estranhe a maneira como foi utilizado o bloco if acima, foi utilizada o design pattern
    * chamado "Early Return" onde se evita uso de elses por exemplo, para manter o código mais legível e 
    * de fácil entendimento, caso queira ver mais detalhes e exemplos sobre esse design de código, acesse:
    *  -> https://dorianneto.com.br/boas-praticas/torne-se-um-ninja-das-funcoes-com-early-return/
    *  -> https://www.alura.com.br/artigos/quanto-mais-simples-melhor
    */
}
}
?>