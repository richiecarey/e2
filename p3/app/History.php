<?php

namespace App;

class History
{
    private $games = [];
    private $rounds = [];

    public function __construct($dataSource, $id)
    {
        if ($id == 0) {
            $this->games = $dataSource->all('games');
        } else {
            $this->games = $dataSource->findByColumn('games', 'id', '=', $id);
            $this->rounds = $dataSource->findByColumn('rounds', 'game_id', '=', $id);
        }
    }

    public function games()
    {
        return $this->games;
    }

    public function rounds()
    {
        return $this->rounds;
    }
}
