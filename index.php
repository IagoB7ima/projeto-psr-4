<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Duelo;
use App\Char\{StephenCurry, RussellWestbrook};
use App\Attributes\{Arremesso, Enterrada};

$arremesso = new Arremesso();
$curry = new StephenCurry($arremesso);

$enterrada = new Enterrada();
$westbrook = new RussellWestbrook($enterrada);

$duelo = new Duelo('Stephen Curry 1 X 1 Russell Westbrook!<br>');
$duelo->addChar($curry);
$duelo->addChar($westbrook);
$duelo->start();
