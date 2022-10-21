<?php

class Game
{
    public function __construct(array $deck, array $outcome, array $style, string $maxRounds)
    {
        $this->outcome = $outcome;
        $round = 0;

        # Deal the cards
        while ($deck) {
            $player1[] = array_shift($deck);
            $player2[] = array_shift($deck);
        }

        # Play
        while (($player1 and $player2) and $round < $maxRounds) {
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
            $this->game[] = [
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
    }
    public function getRounds()
    {
        return $this->game;
    }
    public function getWinner()
    {
        if (end($this->game)['player one card count'] > end($this->game)['player two card count']) {
            $winner = $this->outcome[1];
        } elseif (end($this->game)['player one card count'] < end($this->game)['player two card count']) {
            $winner = $this->outcome[2];
        } else {
            $winner = $this->outcome[0];
        }

        // # Format text
        $winner = ucwords($winner);
        return $winner;
    }
}
