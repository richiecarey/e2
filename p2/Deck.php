<?php

class Deck
{
    # Properties
    public $deck = [];

    # Methods
    public function __construct()
    {
        $standard = [
            'suit' => ['♠', '♣', '♦', '♥'],
            'rank' => ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K']
        ];

        foreach ($standard['suit'] as $suit) {
            foreach ($standard['rank'] as $key => $rank) {
                $this->deck[] = [
                    'rank' => $rank,
                    'suit' => $suit,
                    'value' => $key
                ];
            }
        }
    }

    public function getAll()
    {
        return $this->deck;
    }
}
