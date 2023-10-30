<?php

session_start();

require 'Deck.php';
require 'Game.php';
require 'GameText.php';
require 'Style.php';

$gameText = new GameText();
$title = $gameText->getTitle();

if (isset($_SESSION['maxRounds'])) {
    $maxRounds = $_SESSION['maxRounds'];
    $outcome = $gameText->getOutcome();

    $style = new Style();
    $style = $style->getSuitColor();

    $deck = new Deck();
    $deck = $deck->getAll();
    shuffle($deck);

    $game = new Game($deck, $outcome, $style, $maxRounds);
    $rounds = $game->getRounds();
    $winner = $game->getWinner();
}

require 'index-view.php';
