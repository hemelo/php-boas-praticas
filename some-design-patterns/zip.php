<?php

require 'vendor/autoload.php';

$orcamentoZip = new \DesignPattern\Relatorio\OrcamentoZip();
$orcamento = new \DesignPattern\Orcamento();
$orcamento->valor = 500;

$orcamentoZip->exportar($orcamento);