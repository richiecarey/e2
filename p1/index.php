<?php

# Initiate an array to hold game results
$game = [];

# Set some global variables
$title = 'Richie Carey | Project 1 | DGMD E-2';
$outcome = ['tie','player one','player two'];
$color = [
    '♠' => 'text-gray-900',
    '♣' => 'text-gray-900',
    '♦' => 'text-red-500',
    '♥' => 'text-red-500'
];

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
while(($player1 and $player2) and $i < 500) {
    $i++;
    
    shuffle($player1);
    shuffle($player2);

    $player1_card = array_shift($player1);
    $player2_card = array_shift($player2);

    if ($player1_card['value'] > $player2_card['value']) {
        $result = $outcome[1];
        $player1[] = $player1_card;
        $player1[] = $player2_card;
    }
    elseif ($player1_card['value'] < $player2_card['value']) {
        $result = $outcome[2];
        $player2[] = $player1_card;
        $player2[] = $player2_card;
    }
    else {
        $result = $outcome[0];
    }
    $game[] = [
        'round' => $i,
        'player one card' => $player1_card['rank'].$player1_card['suit'],
        'player one card style' => $color[$player1_card['suit']],
        'player one card count' => count($player1),
        'player two card' => $player2_card['rank'].$player2_card['suit'],
        'player two card style' => $color[$player2_card['suit']],
        'player two card count' => count($player2),
        'result' => $result
    ];
}

if (count($player1) > count($player2)) {
    $winner = $outcome[1];
}
elseif (count($player1) < count($player2)) {
    $winner = $outcome[2];
}
else {
    $winner = $outcome[0];
}

$winner = ucwords($winner);

require 'index-view.php';
