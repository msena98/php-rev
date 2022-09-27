<?php 

// -> valor

$nome = 'Matheus Sena';

function nomeMaiusculo(string $nome): void
{
    $nome = mb_strtoupper($nome);
    return;
}

nomeMaiusculo($nome);

echo "Variável de nome '$nome' não modificada após passar pela função que deixa em maiúsculo.";

/*Isso ocorre, pois foi passado/recebido o VALOR da variável apenas, e não sua referência, 
* é como se o PHP copiasse o valor da variável e ao ser utilizado lá dentro, apenas modificou
* a cópia da variável, que tem o mesmo valor e o retornou depois.
*/

// -> referência

function nomeMinusculo(string &$nome): void // o & indica que será recebida a referência da variável
{
    $nome = mb_strtolower($nome,'UTF-8');
    return;
}

nomeMinusculo($nome);

echo "\nVariável de nome '$nome' modificada após passar pela função que deixa em minúsculo.";

/*Isso ocorre, pois foi passado/recebido a REFERÊNCIA da variável, e não apenas seu valor, 
* é como se o PHP recebesse a localização da memória onde está armazenada a variável, então,
* ao editar dentro da função, estará afetando diretamente o conteúdo da variável.
*/

?>