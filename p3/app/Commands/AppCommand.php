<?php

namespace App\Commands;

use App\Games;

class AppCommand extends Command
{
    public function migrate()
    {
        $this->app->db()->createTable('games', [
            'winner' => 'varchar(255)',
            'rounds' => 'int',
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
        $this->seedGames();
        //$this->seedReviews();
        dump($this->app->db()->all('games'));
    }
}
