<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
        $view = Auth::user() !== null ? 'pages.auth.index' : 'pages.index';

        return view($view);
    }
}
