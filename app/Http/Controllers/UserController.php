<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = User::with('mahasiswa')->where('username', $username)->first();

        if ($user && $user->password === $password && $user->role === 'mahasiswa') {
            session(['user' => $user]);
            return view('pages.home', compact('user'));
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }
}
