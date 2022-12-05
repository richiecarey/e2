<?php

namespace App;

class Language
{
    public function __construct()
    {
        $this->title = 'Richie Carey | Project 3 | DGMD E-2';
        $this->outcome = ['Tie', 'Player', 'Computer'];
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getOutcome()
    {
        return $this->outcome;
    }
}
