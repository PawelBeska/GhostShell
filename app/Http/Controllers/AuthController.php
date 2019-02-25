<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public static function index()
    {
        $view = view('Pages.Panel.Login');
        return $view;
    }

    public function login(UserLoginRequest $request)
    {
        $input = $request->all();
        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password'], 'activated' => 1])) {
            return Redirect::to('/');
        }else{
            return Redirect::back()->witherrors('Błędny email lub hasło!');
        }

    }
}
