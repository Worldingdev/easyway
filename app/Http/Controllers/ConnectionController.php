<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnectionController extends Controller
{
    public function loginPage(){

        return view('auth.login');
    }

    public function registerPage(){

        return view('auth.register');
    }

    public function registration(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required','min:8','confirmed'],
            'password_confirmation' => ['required']
        ]);

        User::create(
            [
               'name' => $validated['name'],
               'email' => $validated['email'],
               'password' => $validated['password'], 
            ]);
        return redirect('/connection');

    }

    public function connection(Request $request){

        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));

        };

        return to_route('loginPage')->with('error', 'idantifyan yo pa korek !');
    }

    public function deconnection(){
        Auth::logout();
        return to_route('loginPage');
    }
}
