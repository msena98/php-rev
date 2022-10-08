<?php

// Interface: é um contrato onde quem assina se responsabiliza por implementar esses métodos (cumprir o contrato)
interface Limpador
{
    public function limpaParabrisa(int $nivelDaChuva): void;
}