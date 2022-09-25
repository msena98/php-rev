<?php

// if/else/else if 

$potenciaDoCarro = 450;

if ($potenciaDoCarro > 500) {
    echo 'Seu carro é super esportivo!';
} else if ($potenciaDoCarro > 250) {
    echo 'Seu carro é esportivo.';
} else {
    echo 'Seu carro é comum.';
}

/* operador ternário -> $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;
* obs: indicado para uso quando serão executadas instruções simples, como abaixo:
*/


$idade = 15;
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;

// *-------------------------------------------------------------------------------------*

// switch

$numero;

switch ($numero) {
    case 0:
        echo 'numero = 0';
        break;
    case 1:
        echo 'numero = 1';
        break;
    case 2:
        echo 'numero = 2';
        break;
}

// switch com ponto e vírgula (;)

$cerveja = 'polar';

switch($cerveja)
{
    case 'skol';
    case 'budweiser';
    case 'stella';
    case 'heineken';
    case 'polar';
    echo 'Excelente escolha!';
        break;
    default;
        echo 'Por favor, faça uma nova seleção...';
        break;
}

// *-------------------------------------------------------------------------------------*

// PHP 8 RFC: Match expression v2 -> https://wiki.php.net/rfc/match_expression_v2

match ($botaoPressionado) {
    's' => 'Salvar'(),
    'd' => 'Deletar'(),
};

echo match ($x) {
    1, 2 => 'O mesmo para 1 e 2',
    3, 4 => 'O mesmo para 3 e 4',
};
?>