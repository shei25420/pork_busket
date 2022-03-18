<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StaffLoginRequest;

class AdminController extends Controller
{
    use ApiResponder;
    public function login(StaffLoginRequest $request) {
        $credentials = $request->safe()->only(['phone', 'password']);
        $credentials['suspended'] = 0;

        if(Auth::guard('admin')->attempt($credentials, $request->safe()->only('remember'))) {
            $request->session()->regenerate();
            return $this->success(['user' => auth('admin')->user()]);
        }

        return $this->fail('Invalid email or password', 401);
    }
}
