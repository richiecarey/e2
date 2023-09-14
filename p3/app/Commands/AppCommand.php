<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function migrate()
    {
        $this->app->db()->createTable('games', [
            'rounds' => 'int',
            'player_count' => 'int(4)',
            'computer_count' => 'int(4)',
            'winner' => 'varchar(32)',
            'timestamp' => 'int(11)'
        ]);
        $this->app->db()->createTable('rounds', [
            'game_id' => 'int',
            'player_rank' => 'varchar(2)',
            'player_suit' => 'varchar(2)',
            'player_style' => 'varchar(16)',
            'player_count' => 'int',
            'computer_rank' => 'varchar(2)',
            'computer_suit' => 'varchar(2)',
            'computer_style' => 'varchar(16)',
            'computer_count' => 'int',
            'outcome' => 'varchar(16)',
        ]);
        dump('Migration complete; check the database for your new tables.');
    }
    public function seedGames()
    {
        $json = file_get_contents($this->app->path('database/games.json'));
        $this->games = json_decode($json, true);

        foreach ($this->games as $game) {
            $this->app->db()->insert('games', $game);
        }
    }
    public function seedRounds()
    {
        $json = file_get_contents($this->app->path('database/rounds.json'));
        $this->rounds = json_decode($json, true);

        foreach ($this->rounds as $round) {
            $this->app->db()->insert('rounds', $round);
        }
    }
    public function fresh()
    {
        $this->migrate();
        $this->seedGames();
        $this->seedRounds();
    }
}
