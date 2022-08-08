<?php

namespace App\Http\Controllers;
use App\Models\artikel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->artikel = new artikel;
    }

    public function addArticle()
    {
        return view('admin/tambahartikel');
    }

    public function editArticle(Request $request)
    {
        $data = artikel::find($request->id);
        return view('admin/editartikel', ['data'=>$data]);
    }

    public function displayArtikel()
    {
        $data = $this->artikel->getAllData();
        return view('admin/adartikel', ["data"=>$data]);
    }

    public function createArtikel(Request $request)
    {
        $artikel = artikel::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'konten' => $request->konten
        ]);
        return redirect('/DashboardArtikel');
    }

    public function updateArtikel(Request $request)
    {
        $artikel = artikel::find($request);
        var_dump($artikel);
    }


}
