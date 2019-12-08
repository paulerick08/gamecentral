<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repos\GoogleAuthenticatorRepo;

use Validator;

class GoogleAuthenticatorController extends Controller
{
    public function __construct(
        GoogleAuthenticatorRepo $google2fa
    ){
        $this->google2fa = $google2fa;
    }

    /**
     * Activate google2fa.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return json
     */
    public function activate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'security_code' => 'required|min:6|max:6'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()], 422);
        }

        $activate = $this->google2fa->activate($request->user(), $request->security_code);

        if (!$activate) {
            return response()->json([
                'error' => 'Invalid security code.'
            ], 422);
        }

        return response()->json([
            'message' => 'Google 2fa activated successfully.'
        ]);
    }

    /**
     * Deactivate google2fa.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return json
     */
    public function deactivate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'security_code' => 'required|min:6|max:6'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()], 422);
        }

        $deactivate = $this->google2fa->deactivate($request->user(), $request->security_code);

        if (!$deactivate) {
            return response()->json([
                'error' => 'Invalid security code.'
            ], 422);
        }

        return response()->json([
            'message' => 'Google 2fa deactivated successfully.'
        ]);
    }
}
