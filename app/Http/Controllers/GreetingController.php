<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting($name = NULL)
    {
        if ($name){
            echo "Hello " . $name . "!";
        } else {
            echo "Hell World!";
        }
    }
}
