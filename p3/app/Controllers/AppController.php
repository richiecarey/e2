<?php

namespace App\Controllers;

use App\Game;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        return $this->app->view('index');
    }
    public function play()
    {
        $game = new Game($this->app->db(), $this->app->input('maxRounds'));
        $this->app->redirect('/', ['game' => $game]);
    }
}
