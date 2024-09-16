<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handle login request.
     */
    public function login(Request $request)
    {
        // Validasi input pengguna
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba login pengguna
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, generate token untuk API
            $token = $request->user()->createToken('api_token')->plainTextToken;

            // Kembalikan response berhasil
            return response()->json([
                'message' => 'Login berhasil',
                'token' => $token,
            ], 200);
        }

        // Jika login gagal
        return response()->json([
            'message' => 'Login gagal, kredensial tidak valid',
        ], 401);
    }
}
