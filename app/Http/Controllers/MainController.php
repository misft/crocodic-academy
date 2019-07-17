<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;

class MainController extends Controller
{
    public function pageRegistration() {
        return view('registration.registration');
    }

    public function addMember(Request $req) {
        Members::create([
            'email' => $req -> email,
            'name' => $req -> name,
            'password' => $req -> password,
            'school' => $req -> school,
            'date_birth' => $req -> date_birth,
            'place_birth' => $req -> place_birth,
            'interest' => $req -> interest,
            'photo' => 'dsaafs'
        ]);

        $req->session()->put('new');
        return redirect('/landing');
    }

    public function pageHome(Request $req) {
        if($req->session()->get('email') && $req->session()->get('password')) {
            return view('/home.home');
        }
        else {
            return view('login.login');
        }
    }

    public function pageLogin() {
        return view('login.login');
    }

    public function pageLanding(Request $req) {
        $new = $req->session()->get('key');

        return view('landing.landing', ['new'=>$new]);
    }

    public function login(Request $req) {
        // $email = Members::where([
        //     'email'=>$req->session()->get('email'),
        //     'password'=>$req->session()->get('password')
        //     ])
        // ->first();

        // if ($email) {
        //     return redirect('/home');
        // }
        // else {
        //     $req->session()->flush();
        return redirect('/login');
        // }
    }
}
