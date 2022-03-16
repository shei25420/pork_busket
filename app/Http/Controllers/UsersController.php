<?php

namespace App\Http\Controllers;

use App\Http\Requests\OtpVerficationRequest;
use App\Models\User;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use App\Notifications\SendOtp;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    use ApiResponder;
    public function register(UserRegisterRequest $request) {
        $data = $request->validated();
        try {
            $data['phone'] = '254'.$data['phone'];
            $user = User::create($data);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success($user);
    }

    public function login(UserRegisterRequest $request) {
        $data = $request->validated();
        $data['phone'] = '254'.$data['phone'];
        try {
            //Verify if phone number is registered with us
            $user = User::where('phone', $data['phone'])->first();
            if(!$user) return $this->fail('Account not found', 404);

            //Verification Code
            $code = mt_rand(1000, 9000);

            VerificationCode::create(['code' => Hash::make($code), 'phone' => $data['phone']]);
            //Send OTP to user  
            $user->notify(new SendOtp($code));
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success(1);
    }

    public function verify(OtpVerficationRequest $request) {
        $data = $request->validated();
        $data['phone'] = '254'.$data['phone'];
        try {
            $code = VerificationCode::where('phone', $data['phone'])->where('active', true)->latest('created_at')->first();
            if(!$code) return $this->fail('Unauthorized', 403);
            
            $user = User::where('phone', $data['phone'])->first();
            if(!$user) return $this->fail('Unauthorized', 403);

            if(!Hash::check($data['code'], $code->code)) $this->fail('Unauthorized', 403);

            $code->active = false;
            $code->save();

            Auth::login($user, true);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->fail($ex->getMessage(), 500);
        }
        return $this->success(auth()->user());
    }
}
