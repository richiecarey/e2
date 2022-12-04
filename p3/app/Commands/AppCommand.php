<?php

namespace App\Commands;

use App\Games;

class AppCommand extends Command
{
    public function migrate()
    {
        $this->app->db()->createTable('games', [
            'rounds' => 'int',
            'player_one_count' => 'int(4)',
            'player_two_count' => 'int(4)',
            'winner' => 'varchar(255)',
            'timestamp' => 'int(11)'
        ]);
        $this->app->db()->createTable('rounds', [
            'game_id' => 'int',
            'player_one_rank' => 'varchar(2)',
            'player_one_suit' => 'varchar(2)',
            'player_one_style' => 'varchar(16)',
            'player_one_count' => 'int',
            'player_two_rank' => 'varchar(2)',
            'player_two_suit' => 'varchar(2)',
            'player_two_style' => 'varchar(16)',
            'player_two_count' => 'int',
            'outcome' => 'varchar(16)',
        ]);
        dump('Migration complete; check the database for your new tables.');
    }
    public function seedGames()
    {
        # Seed sample games
        for ($i = 0; $i < 50; $i++) {
            # Set up a game
            $games = [
                'winner' => ($i % 2 == 0) ? 'Player One' : 'Player Two',
                'rounds' => rand(10, 100),
            ];
            # Insert the game
            $this->app->db()->insert('games', $games);
        }
    }
    public function fresh()
    {
        $this->migrate();
        //$this->seedGames();
        //$this->seedReviews();
        //dump($this->app->db()->all('games'));
    }
}
