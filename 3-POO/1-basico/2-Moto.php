<?php

class Moto
{
/*
* Encapsulamento:
* Definindo o atributo como private, delimitamos o acesso ao atributo apenas a própria classe, ou seja,
* não será possível alterar o atributo, a não ser através de métodos dentro da classe, por exemplo,
* definir $hornet = new Moto(); e então $hornet->guidao = 'curto'; não será permitido, para garantir
* que as regras de negócio sejam respeitadas e seguidas.
*/
    private string $guidao;

    // Getter
    public function recuperaGuidao() : string
    {
        return $this->guidao;
    }

    // Setter 
    public function defineGuidao($guidao): void
    {
        $this->guidao = $guidao;
    }

    /*
    * Utilizando os getter's e setter's estamos mantendo nosso atributo privado, mas ao mesmo tempo
    * permitindo que ele seja definido dentro da classo, sendo possível inserir validações dentro do método
    * e possibilitando que ele seja recuperado, caso seja necessário utilizar a informação do atributo.
    *
    * Nem sempre é necessário criar um getter e um setter, apenas se os métodos serão utilizandos, sempre lembrando
    * das regras de negócio, as quais não podemos criar um código que nãos as siga, ou permita de certa forma, que
    * as mesmas sejam violadas, para entender um pouco mais sobre, faça a leitura dos artigos abaixo:
    * - https://www.alura.com.br/artigos/nao-aprender-oo-getters-e-setters
    * - https://dias.dev/2020-04-13-programacao-procedural-orientada-a-classes-parte-1/
    */
}

?>