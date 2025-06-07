<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = DB::table('users')
            ->where('username', $username)
            ->where('password', $password) 
            ->first();

        if ($user && $user->role === 'mahasiswa') {
            session(['user' => $user]);

            return redirect('/home');
        }
        
        return back()->with('error', 'Username, password, atau role salah');
    }
}
