<?php 

// arrays

// criando arrays vazios

$modelos = []; 
$filmes = Array(); 

// criando array com os dados

$marcas = ['MC Laren', 'Ferrari', 'Lamborghini']; 

// adicionando dados ao array

$modelos[0] = 'Senna';
$modelos[1] = 'F430';
$modelos[2] = 'Hurucan';

$filmes[] = 'Vingadores: Ultimato'; //adiciona no próximo índice NUMÉRICO disponível

// count() -> função que retorna o tamanho do array

echo count($modelos); // irá retornar 3

// arrays associativos -> contém chaves como 'Nome' abaixo, onde cada chave tem um valor.

$pessoa1 = [
    'Nome' => 'Matheus',
    'Idade' => 24,
    'CPF' => '123.456.789-10'
];

/*OBS: as chaves de arrays associativos devem ser inteiros ou strings, caso contrário serão convertidos,
* segundo a tabela de conversões do PHP -> https://www.php.net/manual/pt_BR/types.comparisons.php
*/

?>