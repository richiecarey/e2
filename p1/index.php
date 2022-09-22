<?php

$title = 'Project 1';

# https://en.wikipedia.org/wiki/Playing_cards_in_Unicode
$deck = [
    'suit' => ['♠','♣','♦','♥'],
    'rank' => ['A','2','3','4','5','6','7','8','9','10','J','Q','K']    
];

foreach($deck['suit'] as $suit) {
    foreach($deck['rank'] as $rank) {
        $hand[] = $rank.$suit;
    }
}

//shuffle($hand);

require 'index-view.php';
