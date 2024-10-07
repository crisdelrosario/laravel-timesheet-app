<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Resources\UserResource;

class AuthController extends Controller
{
    public function login(Request $request) {
        $response = ['status' => 401];

        $data = $request->json()->all();
        $user = User::where('email', $data['email'])->first();

        if ($user) {
            Auth::login($user);
            $user = Auth::user();
            $token = $user->createToken('Laravel Password Grant Client')->accessToken; 

            $response = ['status' => 200, 'token' => $token, 'user' => new UserResource($user)];
        }

        return response()->json($response);
    }
}
