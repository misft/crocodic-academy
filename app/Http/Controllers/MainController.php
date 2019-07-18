<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use crocodicstudio\crudbooster\helpers\CRUDBooster;

class MainController extends Controller
{
    public function pageRegistration() {
        return view('registration.registration');
    }

    public function addMember(Request $req) {
        Siswa::create([
            'email' => $req -> email,
            'nama' => $req -> name,
            'password' => $req -> password,
            'alamat' => 'test',
            'id_sekolah' => '1',
            'Kelas' => 'test',
            'id_bidang' => '1',
            'fakultas' => 'test'
        ]);

        $data = [];
        CRUDBooster::sendEmail(['to'=>$req->email,'data'=>$data, 'template'=>'ApprovalEmailSend']);

        return redirect('/landing');
    }

    public function pageHome(Request $req) {
        // if($req->session()->get('email') && $req->session()->get('password')) {
            return view('/home.home');
        // }
        // else {
            // return view('login.login');
        // }
    }

    public function pageLogin() {
        return view('login.login');
    }

    public function pageCourse($id) {
        return view('course.course');
    }

    public function pageLanding(Request $req) {
        $new = $req->session()->get('key');

        return view('landing.landing', ['new'=>$new]);
    }

    public function login(Request $req) {
        // $signedin = Members::where([
        //     'email'=>$req->session()->get('email'),
        //     'password'=>$req->session()->get('password')
        //     'email_verified'=>$req->
        //     ])
        // ->first();

        // if ($signedin) {
            return view('home.home');
        // }
        // else {
        //     $req->session()->flush();
        //     return redirect('/login');
        // }
    }
}
