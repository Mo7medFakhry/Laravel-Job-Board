<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $token = auth('api')->attempt($credentials);

        if (!$token) {
            return response()->json(['message' => 'Unauthorized access!'], 401);
        }
        return response()->json([
            'token' => $token,
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ], 200);
    }

    public function refresh(){
        $refreshedToken = auth('api')->refresh();
        return response()->json([
            'token' => $refreshedToken,
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ], 200);
    }

    public function me(){
        $user = auth('api')->user();

        return response()->json($user, 200);
    }

    public function logout(){
        auth('api')->logout(true);

        return response()->json(['message' => 'Successfully logged out'], 200);
    }
}
