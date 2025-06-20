<?php

namespace App\Http\Controllers;

use App\Mail\NewUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
            'password' => ['required','min:8'],
        ]);

        $emailCheck = User::where('email', $validated['email'])->first();

        if($emailCheck){
            return to_route('registerPage')->with('error', 'Ere !!! adres imel sa egziste sou sistem nan deja !');
        }

        $userCreating = User::create(
            [
               'name' => $validated['name'],
               'email' => $validated['email'],
               'password' => $validated['password'], 
               'type' => 'ajan',
               'state' => 'aktive',
            ]);
        Mail::to($userCreating)->send(new NewUser);
        return redirect('/manageUser')->with('success', 'kont kreye ak sikse !');

    }

    public function connection(Request $request){

        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($validated)){
            if(Auth::user()->state == 'aktive'){
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'))->with('success', 'koneksyon keyisi!');
            }else{
                return to_route('loginPage')->with('error', 'Dezole !!! Kont sa pa aktive, kontakte administrate sistem nan !');
            }

        };

        return to_route('loginPage')->with('error', 'Ere !!! idantifyan yo pa korek !');
    }

    public function deconnection(){
        Auth::logout();
        return to_route('loginPage');
    }
}
