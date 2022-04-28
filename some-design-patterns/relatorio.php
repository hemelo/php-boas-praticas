<?php

require 'vendor/autoload.php';

use DesignPattern\{Orcamento, Pedido};
use DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

$pedido = new Pedido();
$pedido->nomeCliente = 'Vincius Dias';
$pedido->dataFinalizacao = new DateTimeImmutable();

$orcamentoExportado = new PedidoExportado($pedido);
$orcamentoExportadoXml = new ArquivoXmlExportado('pedido.array');

echo $orcamentoExportadoXml->salvar($orcamentoExportado);
