<?php

class GameText
{
    public function __construct()
    {
        $this->title = 'Richie Carey | Project 1 | DGMD E-2';
        $this->outcome = ['tie', 'player one', 'player two'];
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
