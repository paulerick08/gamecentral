<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseGWXController extends Controller
{
    public function index()
    {
        return view('pages.auth.purchase_gwx_tokens.index');
    }
}
