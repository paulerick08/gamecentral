<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenSwapController extends Controller
{
    public function index()
    {
        return view('pages.auth.token_swap');
    }
}
