<?php

namespace src;

require dirname(__DIR__) . "/vendor/autoload.php";

use Treinando\Interfaces\Models\Papagaio;
use Treinando\Interfaces\Models\Pinguim;

$papagaio = new Papagaio();
$papagaio->fazerSom();
$papagaio->voar();

$pinguim = new Pinguim();
$pinguim->fazerSom();