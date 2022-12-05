<?php

namespace App;

class Language
{
    public function __construct()
    {
        $this->outcome = ['Tie', 'Player', 'Computer'];
    }

    public function getOutcome()
    {
        return $this->outcome;
    }
}
