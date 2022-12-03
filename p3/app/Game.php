<?php

namespace App;

use App\Deck;
use App\GameText;
use App\Style;

class Game
{
    private $game;
    private $game_id = 0;
    private $deck = [];
    private $round = 0;
    private $player1 = [];
    private $player2 = [];
    private $maxRounds = 0;
    private $style;

    public function __construct($dataSource, $maxRounds)
    {
        // $this->game_id = $dataSource->insert('games', [
        //     'winner' => null,
        //     'rounds' => null,
        // ]);

        $this->style = new Style();
        $this->style = $this->style->getSuitColor();
        $this->gameText = new GameText();
        $this->outcome = $this->gameText->getOutcome();
        $this->maxRounds = $maxRounds;

        $this->deck = new Deck();
        $this->deck = $this->deck->getAll();
        shuffle($this->deck);

        # Deal the cards
        while ($this->deck) {
            $this->player1[] = array_shift($this->deck);
            $this->player2[] = array_shift($this->deck);
        }

        # Play
        while (($this->player1 and $this->player2) and $this->round < $this->maxRounds) {
            $this->round++;
            //dd($this->round);

            # Both players re-shuffle to reduce risk of stalemate
            shuffle($this->player1);
            shuffle($this->player2);

            # Each player plays a card off the top of their hand
            $this->player1_card = array_shift($this->player1);
            $this->player2_card = array_shift($this->player2);

            if ($this->player1_card['value'] > $this->player2_card['value']) {
                $this->result = 1;
                $this->player1[] = $this->player1_card;
                $this->player1[] = $this->player2_card;
                $this->result = $this->outcome[1];
            } elseif ($this->player1_card['value'] < $this->player2_card['value']) {
                $this->result = 2;
                $this->player2[] = $this->player1_card;
                $this->player2[] = $this->player2_card;
                $this->result = $this->outcome[2];
            } else {
                $this->result = $this->outcome[0];
            }

            # Add the results of the round to the game array
            $this->game[] = [
                'round' => $this->round,
                'player one card' => $this->player1_card['rank'] . $this->player1_card['suit'],
                'player one card style' => $this->style[$this->player1_card['suit']],
                'player one card count' => count($this->player1),
                'player two card' => $this->player2_card['rank'] . $this->player2_card['suit'],
                'player two card style' => $this->style[$this->player2_card['suit']],
                'player two card count' => count($this->player2),
                'result' => $this->result
            ];
        }
        $this->game_id = $dataSource->insert('games', [
            'winner' => $this->getWinner(),
            'rounds' => $this->round,
        ]);
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
    public function id()
    {
        return $this->game_id;
    }
}
