<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;


//SESI
// form login
class AuthController extends Controller
{
    public function loginView() : View {
        return view("sesi.login");
    }

    public function registerView() : View {
        return view("sesi.regis");
    }

    public function loginForm(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect(route('challenge-list'));
        }
        return view("sesi.login");
    }

    public function registerForm(Request $request) {
        User::create([
            "nama" => $request->name,
            "alamat" => $request->address,
            "no_hp" => $request->phone,
            "gender" => $request->gender,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        return redirect(route("login.get"));
    }

    public function signOut() {
        Auth::logout();
   
        return redirect(route("challenge-list"));
    }
}
