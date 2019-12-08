<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;

class ChangePasswordController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|string|min:8|confirmed'
            ]);

            if (Hash::check($request->current_password, Auth::user()->password)) {
              
                Auth::user()->update([
                    'password' => Hash::make($request->new_password)
                ]);

                Session::flash('success', 'Password successfully changed.');
            } else {
                Session::flash('error', 'Invalid current password.');
            }

            return redirect()->back();
        }

        return view('pages.auth.change_password');
    }

    public function resetPassword(Request $request) 
    {

    }
}
