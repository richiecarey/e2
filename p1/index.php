<?php

$title = 'Project 1';

$game = [];

# Construct a standard 52 card deck of cards
$standard = [
    'suit' => ['♠','♣','♦','♥'],
    'rank' => ['A','2','3','4','5','6','7','8','9','10','J','Q','K']
];

foreach($standard['suit'] as $suit) {
    foreach($standard['rank'] as $key => $rank) {
            $deck[] = [
            'rank' => $rank,
            'suit' => $suit,
            'value' => $key
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
$i = 0;
// while($player1 and $player2) {
while($i < 5000) {
    $i++;

    $player1_card = array_shift($player1);
    $player2_card = array_shift($player2);

    $winner = "";

    if (($player1_card['value'] == $player2_card['value'])) {
        $winner = "tie";
    }
    if ($player1_card['value'] > $player2_card['value']) {
        $winner = "player one<br>";
        $player1[] = $player1_card;
        $player1[] = $player2_card;
    }
    elseif ($player1_card['value'] < $player2_card['value']) {
        $winner = "player two<br>";
        $player2[] = $player1_card;
        $player2[] = $player2_card;
    }

    $game[] = [
        'player one' => $player1_card,
        'player two' => $player2_card,
        'player one cards left' => count($player1),
        'player two cards left' => count($player2),
        'winner' => $winner,
    ];
}

require 'index-view.php';
