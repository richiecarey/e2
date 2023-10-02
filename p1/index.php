<?php

# Initiate an array to hold game results
$game = [];

# Set some global variables
$title = 'Richie Carey | Project 1 | DGMD E-2';
$outcome = ['tie', 'player one', 'player two'];
$style = [
    '♠' => 'text-gray-900',
    '♣' => 'text-gray-900',
    '♦' => 'text-red-500',
    '♥' => 'text-red-500'
];

# Construct a standard 52 card deck of cards
$standard = [
    'suit' => ['♠', '♣', '♦', '♥'],
    'rank' => ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K']
];

foreach ($standard['suit'] as $suit) {
    foreach ($standard['rank'] as $key => $rank) {
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
while ($deck) {
    $player1[] = array_shift($deck);
    $player2[] = array_shift($deck);
}

# Play
$round = 0;
while (($player1 and $player2) and $round < 500) {
    $round++;

    # Both players re-shuffle to reduce risk of stalemate
    shuffle($player1);
    shuffle($player2);

    # Each player plays a card off the top of their hand
    $player1_card = array_shift($player1);
    $player2_card = array_shift($player2);

    if ($player1_card['value'] > $player2_card['value']) {
        $result = $outcome[1];
        $player1[] = $player1_card;
        $player1[] = $player2_card;
    } elseif ($player1_card['value'] < $player2_card['value']) {
        $result = $outcome[2];
        $player2[] = $player1_card;
        $player2[] = $player2_card;
    } else {
        $result = $outcome[0];
    }

    # Add the results of the round to the game array
    $game[] = [
        'round' => $round,
        'player one card' => $player1_card['rank'] . $player1_card['suit'],
        'player one card style' => $style[$player1_card['suit']],
        'player one card count' => count($player1),
        'player two card' => $player2_card['rank'] . $player2_card['suit'],
        'player two card style' => $style[$player2_card['suit']],
        'player two card count' => count($player2),
        'result' => $result
    ];
}

# Determine game winner
if (count($player1) > count($player2)) {
    $winner = $outcome[1];
} elseif (count($player1) < count($player2)) {
    $winner = $outcome[2];
} else {
    $winner = $outcome[0];
}

# Format text
$winner = ucwords($winner);

require 'index-view.php';