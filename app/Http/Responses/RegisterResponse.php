<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{

    public function toResponse($request)
    {
        // TODO: Implement toResponse() method.
        return $request->wantsJson()
            ? response()->json(['role' => 'admin'])
            : redirect()->intended(
                'dashboard');
    }
}
