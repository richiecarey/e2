<?php

class GameText
{
    public $title;
    public $outcome;
     
    public function __construct()
    {
        $this->title = 'Richie Carey | Project 2 | DGMD E-2';
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