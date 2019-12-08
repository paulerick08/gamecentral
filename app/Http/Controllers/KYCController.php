<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KYCController extends Controller
{
    public function index()
    {
        return view('pages.auth.kyc');
    }
}
