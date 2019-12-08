<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DigitalWinController extends Controller
{
    public function wallet(Request $request)
    {
        info(json_encode($request->all()));

        return response()->json(['message' => 'success']);
    }
}
