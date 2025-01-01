<?php

namespace App\Http\Re;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        // TODO: Implement toResponse() method.
        /**
         * BELOW IS THE EXISTING RESPONSE
         * REPLACE THIS WITH YOUR OWN
         * THE USER CAN BE LOCATED WITH THIS AUTH FACADE
         */

        return $request->wantsJson()
            ? response()->json(['register' => false])
            : redirect()->intended(
                auth()->user()->currentTeam->id ? route('dashboard') : route('Register')
            );
    }
}
