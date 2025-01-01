<?php

namespace App\Http\Responses;

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
        $role = Auth::user()->role;

        return $request->wantsJson()
            ? response()->json(['two_factor_secret' => false])
            : redirect()->intended(
                $role == 'admin' ? route('register') :route('profile.show')
            );
    }
}
