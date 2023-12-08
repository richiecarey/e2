<?php

namespace App;

class Style
{
    private $suitColor;
    
    public function __construct()
    {
        $this->suitColor = [
            '♠' => 'text-gray-900',
            '♣' => 'text-gray-900',
            '♦' => 'text-[#d12d36]',
            '♥' => 'text-[#d12d36]'
        ];
    }

    public function getSuitColor()
    {
        return $this->suitColor;
    }
}