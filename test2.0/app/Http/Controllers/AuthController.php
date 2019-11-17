<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $arr = [
            'name' => $request->username,
            'password' => $request->password
        ];
        if(\Auth::attempt($arr)){
            echo 'true';
        }
        else{
            echo 'false';
        }

    }
}
