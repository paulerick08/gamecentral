<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoFactorController extends Controller
{
    public function index() {
        return view('pages.auth.two_factor');
    }
}
