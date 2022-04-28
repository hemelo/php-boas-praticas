<?php

use DesignPattern\Http\CurlHttpAdapter;
use DesignPattern\Http\ReactPHPHttpAdapter;
use DesignPattern\RegistroOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new \DesignPattern\Orcamento());
