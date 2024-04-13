<?php


namespace Treinando\Interfaces\Models;

use Treinando\Interfaces\Interfaces\AveNaoVoadoraInterface;

class Pinguim implements AveNaoVoadoraInterface
{

    public function fazerSom()
    {
        echo "Eu nao sei voar ;-;\n";
    }
}