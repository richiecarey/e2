<?php

namespace App\Controllers;

use App\Hello;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        //$hello = new Hello();
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];

        return $this->app->view('index', [
            'welcome' => Hello::speak()
        ]);
    }
}
