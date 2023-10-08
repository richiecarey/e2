<h1>Practice</h1>

<img src='hes-logo.png' alt='Harvard Extension School logo'>

<?php

$deck = [0,1,2,3,4,5,6,7,8,9];

while ($deck) {
    $player1[] = array_shift($deck);
    $player2[] = array_shift($deck);
}

var_dump($player2);