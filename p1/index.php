<?php

$title = 'Project 1';

$game = [];

# Construct a standard 52 card deck of cards
$standard = [
    'suit' => ['♠','♣','♦','♥'],
    'rank' => ['A','2','3','4','5','6','7','8','9','10','J','Q','K']    
];

$face_cards = array_slice($standard['rank'], -3);

foreach($standard['suit'] as $suit) {
    foreach($standard['rank'] as $rank) {
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

# Play
while($player1 and $player2) {

    $player1_card = array_shift($player1);
    $player2_card = array_shift($player2);

    if (($player1_card['rank'] == $player2_card['rank']) or
        (in_array($player1_card['rank'], $face_cards) and 
         in_array($player2_card['rank'], $face_cards))) {
            echo "tie<br>";
    }
    elseif ($player1_card['rank'] > $player2_card['rank']) {
        $player1[] = array_merge($player1, $player1_card, $player2_card);
        echo "player one<br>";
    }
    elseif ($player1_card['rank'] < $player2_card['rank']) {
        $player2[] = array_merge($player2, $player1_card, $player2_card);
        echo "player two<br>";
    }
}

require 'index-view.php';
