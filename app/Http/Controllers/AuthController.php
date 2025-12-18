<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as Session;
use Laravel\Prompts\Table;

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
            session()->put('usr_pass', $users->password);
            session()->put('usr_role', $users->role);

            return redirect()->action([PageController::class, 'main']);
        }
        else
        {
            return redirect()->action([PageController::class, 'showLogin'])->with('error','Invalid Login Credentials.');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->action([PageController::class,'showLogin'])->with('success', 'Successfuly signed out.');
    }

    // public function changePass(Request $request) {

    //     $validated = $request->validate([
    //         'currpassword' => 'required|string',
    //         'newpassword' => 'required|string|min:8|confirmed',
    //         // 'confirmpassword' => 'required|string'
    //     ]);


    //     $user_pass = DB::table('users')
    //     ->where('id', session('usr_id'))
    //     ->value('password');

    //     if($validated['currpassword'] == $user_pass){
    //         if($validated['newpassword'] == $validated['confirmpassword']){

    //             DB::table('users')
    //             ->where('id', session('usr_id'))
    //             ->update([
    //                 'password' => Hash::make($validated['newpassword']),
    //                 'updated_at' => now()
    //             ]);

    //             return redirect()->action([PageController::class,'adminDashboard'])->with('success', 'Password has been updated');
    //         }
    //         return redirect()->back()->with('error','Password Invalid');
    //     }
    //     return redirect()->back()->with('error','Password Invalid');
    // }

        public function changePass(Request $request)
    {
        
        
        $validated = $request->validate([
            'currpassword' => 'required|string',
            'newpassword' => 'required|string|min:8',
            'confirmpassword' => 'required|string',
        ]);

        // Plain-text comparison
        if ($validated['currpassword'] != session('usr_pass')) {
            return back()->with('error', 'Current password is incorrect');
        }

        if ($validated['newpassword'] != $validated['confirmpassword']) {
            return back()->with('error', 'Passwords do not match');
        }

        DB::table('users')
            ->where('id', session('usr_id'))
            ->update([
                'password'=> $validated['confirmpassword'
                ]]);
            session()->put('usr_pass', $validated['confirmpassword']);
        return back()->with('success', 'Password updated successfully');
    }
}


