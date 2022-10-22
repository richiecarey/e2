<?php

class Style
{
    public function __construct()
    {
        $this->suitColor = [
            '♠' => 'text-gray-900',
            '♣' => 'text-gray-900',
            '♦' => 'text-red-500',
            '♥' => 'text-red-500'
        ];
    }

    public function getSuitColor()
    {
        return $this->suitColor;
    }
}
