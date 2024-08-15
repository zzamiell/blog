<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $validator = Validator::make(
            $request->all(),
            [
                "email" => "required",
                "password" => "required",
            ],
        );

        if ($validator->fails()) {
            return redirect()->route('index')
            ->withErrors($validator)
            ->with('message', 'Invalid data error');
        }

        $users = DB::table('users')->where('email',$request->email)->first();
        if(!$users){
            return redirect()->route('index')
            ->with('credentials', 'user not found');
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }else{
            return redirect()->route('index')
            ->with('credentials', 'username/password not match');
        }
    }
}
