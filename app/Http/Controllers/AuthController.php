<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function log_staf()
    {
        return view('auth.login_staf');
    }

    public function loginStaff(UserRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }
            Auth::logout();
        }

        return back()->withErrors(['username' => 'Login gagal, hanya untuk Staff Admin']);
    }

    public function log_mahasiswa()
    {
        return view('auth.login_mahasiswa');
    }

    public function loginMahasiswa(UserRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'mahasiswa') {
                return redirect()->route('mahasiswa.dashboard');
            }
            Auth::logout();
        }

        return back()->withErrors(['username' => 'Login gagal, hanya untuk Mahasiswa']);
    }
}
