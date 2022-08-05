<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $content = "Temporary Data";
        return view('user/dashboard', ["content" => $content]);
    }

    public function booking()
    {
        return view('user/form');
    }

    public function viewHistory()
    {
        return view('user/artikel');
    }

    public function viewSendang()
    {
        return view('user/artikelsendang');
    }

    public function viewPapan()
    {
        return view('user/artikelpapan');
    }

    public function viewNgliyep()
    {
        return view('user/artikelngliyep');
    }

    public function viewGoa()
    {
        return view('user/artikelgoa');
    }
}
