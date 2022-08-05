<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function addWisata()
    {
        return view('admin/tambahwisata');
    }

    public function addArticle()
    {
        return view('admin/tambahartikel');
    }
}
