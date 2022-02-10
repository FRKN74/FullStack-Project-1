<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function login()
    {
        return view('layouts.back.loginPage');
    }
    public function loginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email , 'password' => $request->password])) {
            toastr()->info('Hoşgeldiniz '.auth()->user()->name." ".auth()->user()->surname);
            return redirect()->route('admin.dashboard');
        }
        toastr()->info('Hoşgeldin'+ auth()->user()->name);
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();

        toastr()->info('Yine bekleriz,iyi günler');
        return redirect()->route('login');
    }
}
