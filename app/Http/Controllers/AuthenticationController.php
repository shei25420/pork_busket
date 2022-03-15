<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    use ApiResponder;
    public function login(AuthenticateRequest $request) {
        $credentials = $request->safe()->only(['phone', 'password']);
        $credentials['suspended'] = 0;

        if(Auth::attempt($credentials, $request->safe()->only('remember'))) {
            $request->session()->regenerate();
            return $this->success(['type' => auth()->user()->role_id]);
        }

        return $this->fail('Invalid email or password', 401);
    }


    public function register(UserRegisterRequest $request) {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        Auth::loginUsingId($user->id, $data['rememeber']);
        return $this->success(1);
    }

    public function csrf_token(Request $request) {
        return $this->success($request->session()->token());
    }
}
