<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayingHistoryController extends Controller
{
    public function index()
    {
        return view('pages.auth.playing_history');
    }
}
