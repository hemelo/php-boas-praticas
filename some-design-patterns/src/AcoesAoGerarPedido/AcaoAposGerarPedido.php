<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}