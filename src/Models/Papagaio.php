<?php


namespace Treinando\Interfaces\Models;

use Treinando\Interfaces\Interfaces\AveVoadoraInterface;

class Papagaio implements AveVoadoraInterface
{

    public function fazerSom()
    {
        echo "papagaio fazendo som\n";
    }

    public function voar()
    {
        echo "papagaio voando\n";
    }
}