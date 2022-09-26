<?php

namespace App;

class Duelo
{
    private $tituloDoDuelo;
    private $chars;

    public function __construct($tituloDoDuelo)
    {
        $this->tituloDoDuelo = $tituloDoDuelo;
    }

    public function addChar($char)
    {
        $this->chars[] = $char;
    }

    public function start()
    {
        echo sprintf('%s Quem é melhor?' . PHP_EOL, $this->tituloDoDuelo);

        $charsAndAttributes = array_map(function ($charAndAttr) {
            return sprintf(
                'Jogador: %s, Habilidade: %s',
                $charAndAttr->getName(),
                $charAndAttr->getAttribute()
            );
        }, $this->chars);

        echo implode(PHP_EOL, $charsAndAttributes);
    }
}
