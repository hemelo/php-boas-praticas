<?php

namespace DesignPattern\Log;

interface LogWritter
{
    public function escreve(string $mensagemFormatada): void;
}
