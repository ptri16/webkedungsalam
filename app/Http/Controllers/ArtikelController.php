<?php

namespace App\Http\Controllers;
use App\Models\artikel;
use App\Models\displayWisata;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->artikel = new artikel;
        $this->display = new displayWisata;
    }

    public function addArticle()
    {
        return view('admin/tambahartikel');
    }

    public function displayArtikel()
    {
        $data = $this->artikel->getAllData();
        $disp = $this->display::all();
        return view('admin/adartikel', ["data"=>$data, "disp"=>$disp]);
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

    public function updateArtikel($id)
    {
        $results = DB::select('select * from artikels where id = :id', ['id' => $id]);
        return view('admin/editartikel', ['data'=>$results]);
        
    }

    public function editArtikel(Request $request)
    {
        $judul = $request->judul;
        $penulis = $request->penulis;
        $konten = $request -> konten;
        $id = $request -> id;
        $action = artikel::where('id', $id)
            ->first()
            ->update([
            'judul' => $judul,
            'penulis' => $penulis,
            'konten' => $konten
        ]);
        return redirect('/DashboardArtikel');
    }

    public function deleteArtikel($id)
    {
        $artikel = artikel::find($id);
        $artikel->delete();
        return redirect('/DashboardArtikel');
    }

    public function pickDisplay()
    {
        
    }


}
