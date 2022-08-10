<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function menuWisata()
    {
        return view('admin/adwisata');
    }

    public function menuArtikel()
    {
        return view('admin/adartikel');
    }

    public function menuAdmin()
    {
        
        $users = user::all();
        return view('admin/adadmin', compact('users'));
        // return view('admin/adadmin');
    }

    public function addAdmin()
    {
        return view('admin/tambahadmin');
    }

    public function editAdmin()
    {
        return view('admin/editadmin');
    }
}
