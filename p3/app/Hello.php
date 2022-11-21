<?php

namespace App;

class Hello
{
    public $message = "Hello from Hello.php";

    public static function speak()
    {
        global $message;
        //$message = "Hello from Hello.php";
        return $message;
    }
}
