<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validateLogin($request);
        //login true

        if(Auth::attempt($request->only('email', 'password'))){
            return response()->json([
                'token' => $request->user()->createToken($request->name)->plainTextToken,
                'message' => 'success'
            ]);
        }

     return response()->json([
         'message' => 'no esta autorizado',
         
     ], 401);

        //login false

    }

    public function validateLogin(Request $request){
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required'
        ]);
    }
}
