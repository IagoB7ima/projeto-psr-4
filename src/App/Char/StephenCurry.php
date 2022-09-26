<?php

namespace App\Char;

class StephenCurry
{
    public function __construct($attribute)
    {
        $this->name = 'Stephen Curry';
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
