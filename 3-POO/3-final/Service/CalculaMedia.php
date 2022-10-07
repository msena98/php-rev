<?php
/* Uma classe de serviço representa uma funcionalidade, 
* enquanto uma classe de modelo representa algo real em nosso modelo domínio.
*/
class CalculaMedia 
{

    private float $mediaVeiculos = [];

    public function calculaMediaDe(Veiculo $veiculo) : float
    {
        $media = $veiculo->quilometragem / $veiculo->combustivel;
        array_push($mediaVeiculos, $media);

        return $media;
    }
}

?>