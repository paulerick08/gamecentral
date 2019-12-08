<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalDetailsController extends Controller
{
    public function index()
    {
        return view('pages.auth.personal_details');
    }
}
