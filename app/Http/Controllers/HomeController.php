<?php

namespace App\Http\Controllers;
use App\Models\pesanan;
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
        $user = pesanan::all();
        // return view('admin/adadmin', compact('users'));
        return view('admin/index',compact('user'));
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
