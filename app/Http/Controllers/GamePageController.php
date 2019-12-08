<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamePageController extends Controller
{
    public function index()
    {
        return view('pages.auth.game_page');
    }
}
