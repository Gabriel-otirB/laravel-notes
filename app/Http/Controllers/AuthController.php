<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // FORM VALIDATION
        $request->validate(
            [
                'text_username' => 'required',
                'text_password' => 'required',
            ]
        );

        // GET USER INPUT
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        echo 'OK, validado!';
    }

    public function logout()
    {
        echo 'Logout';
    }
}
