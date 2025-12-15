<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends Controller
{
    public function index(){
        return view('layouts.pages.login');
    }
    public function main(){
        if(!session()->has('usr_id')){
            return redirect('/login')->with('error','Please login first.');
        }
        return view('layouts.themes.main');
    }
}
