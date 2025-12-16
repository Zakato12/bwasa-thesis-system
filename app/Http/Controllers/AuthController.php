<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as Session;

class AuthController extends Controller
{
    public function login( Request $request){
        $usr_name = $request->input('username');
        $usr_pass = $request->input('password');

        $users = DB::table('users')
        ->where('username', $usr_name)
        ->where('password', $usr_pass) // Hash::make($usr_pass)
        // ->where('active', '=', '1')
        ->first();

        if($users){
            session()->put('usr_id', $users->id);
            session()->put('usr_name', $users->username);
            session()->put('usr_role', $users->role);

            return redirect()->action([PageController::class, 'main']);
        }
        else
        {
            return redirect()->action([PageController::class, 'showLogin'])->with('error','Invalid Login Credentials.');
        }
    }
}
