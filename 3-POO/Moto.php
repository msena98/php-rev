<?php

class Moto
{
/*
* Definindo o atributo como private, delimitamos o acesso ao atributo apenas a própria classe, ou seja,
* não será possível alterar o atributo, a não ser através de métodos dentro da classe, por exemplo,
* definir $hornet = new Moto(); e então $hornet->guidao = 'curto'; não será permitido, para garantir
* que as regras de negócio sejam respeitadas e seguidas.
*/
    private string $guidao;
}

?>