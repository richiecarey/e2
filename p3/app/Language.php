<?php

namespace App;

class Language
{
    private $outcome;
    
    public function __construct()
    {
        $this->outcome = ['Tie', 'Player', 'Computer'];
    }

    public function getOutcome()
    {
        return $this->outcome;
    }
}