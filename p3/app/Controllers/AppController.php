<?php

namespace App\Controllers;

use App\Game;
use App\History;

class AppController extends Controller
{
    public function index()
    {
        return $this->app->view('index');
    }
    public function play()
    {
        $this->app->validate([
            'name' => 'required|alpha',
            'maxRounds' => 'numeric',
        ]);
        $game = new Game($this->app->db(), $this->app->input('name'), $this->app->input('maxRounds'));
        $this->app->redirect('/', ['game' => $game]);
    }
    public function history()
    {
        $id = $this->app->param('id', 0);
        $history = new History($this->app->db(), $id);
        return $this->app->view('history', ['games' => $history->games(), 'rounds' => $history->rounds()]);
    }
}
