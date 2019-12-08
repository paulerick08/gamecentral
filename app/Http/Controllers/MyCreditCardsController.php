<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCreditCardsController extends Controller
{
    public function index()
    {
        return view('pages.auth.my_credit_cards.index');
    }

    public function addCreditCard()
    {
        return view('pages.auth.my_credit_cards.add_credit_card');
    }
}
