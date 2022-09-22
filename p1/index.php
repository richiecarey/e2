<?php

$title = 'Project 1';

# Construct a standard 52 card deck of cards
$composition = [
    'suit' => ['♠','♣','♦','♥'],
    'rank' => ['A','2','3','4','5','6','7','8','9','10','J','Q','K']    
];
foreach($composition['suit'] as $suit) {
    foreach($composition['rank'] as $rank) {
        $deck[] = [
            'rank' => $rank,
            'suit' => $suit
        ];
    }
}

# Shuffle the deck
shuffle($deck);

# Deal the cards
while($deck) {
    $player1[] = array_shift($deck);
    $player2[] = array_shift($deck);
}

require 'index-view.php';
