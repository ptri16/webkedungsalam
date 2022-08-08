<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    

    public function addWisata()
    {
        return view('admin/tambahwisata');
    }

    public function editWisata()
    {
        return view('admin/editwisata');
    }
}
