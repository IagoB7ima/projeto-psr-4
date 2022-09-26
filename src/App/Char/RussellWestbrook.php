<?php

namespace App\Char;

class RussellWestbrook
{
    private $name;
    private $attribute;

    public function __construct($attribute)
    {
        $this->name = 'Russell Westbrook';
        $this->attribute = $attribute;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAttribute()
    {
        return $this->attribute->do();
    }
}
