<?php

namespace Solid\Service;

use Solid\Model\Assistivel;

class Assistidor
{
    public function assistir(Assistivel $conteudo)
    {
        $conteudo->assistir();
    }
}
