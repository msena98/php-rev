<?php

class Moto
{
    private string $guidao;
    public function recuperaGuidao() : string
    {
        return $this->guidao;
    }
    public function defineGuidao($guidao): void
    {
        $this->guidao = $guidao;
    }
}
?>