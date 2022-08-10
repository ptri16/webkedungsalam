<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function redirect()
    {
        return view('admin/index');
    }

    public function index()
    {   
        if (Auth::check()) {
            # code...
            return redirect('home');
            // return view('dashboard') ;
            
        }
            return view('user.dashboard');
        
        
    }
}
