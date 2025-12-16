<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends Controller
{
    public function showLogin(){
        return view('layouts.auth.login');
    }
    public function main(){
        if(!session()->has('usr_id')){
            return redirect('/login')->with('error','Please login first.');
        }
        return view('layouts.pages.dashboards.admin');
    }

    // Dashboard pages
    public function admindashboard(){
        return view('layouts.pages.dashboards.admin');
    }
    public function offdashboard(){
        return view('layouts.pages.dashboards.official');
    }
    public function teresdashboard(){
        return view('layouts.pages.dashboards.treasurer');
    }
    public function memdashboard(){
        return view('layouts.pages.dashboards.member');
    }
}
