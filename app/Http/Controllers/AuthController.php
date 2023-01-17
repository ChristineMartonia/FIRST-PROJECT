<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $user = User::first();

        $validatedData = $request->validate([
            'email' =>'required|email',
            'password' =>'required|min:6',
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if($user && Hash::check($validatedData['password'], $user->password)){

            $token = $user->createToken('api', ['create']);

            return [
                'name' => $user->name,
                'email' => $user->email,
                'token' => $token -> plainTextToken
            ];

        } else {
            return "Invalid Credentials";
        }


    }
}
