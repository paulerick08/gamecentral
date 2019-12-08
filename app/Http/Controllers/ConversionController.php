<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversionController extends Controller
{
    public function index()
    {
        return view('pages.auth.conversion.index');
    }
    public function complete()
    {
        return view('pages.auth.conversion.complete');
    }
}
