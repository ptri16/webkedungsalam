<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata;
use App\Models\displayWisata;


class WisataController extends Controller
{

    public function __construct()
    {
        $this->wisata = new wisata;
        $this->displayWisata = new displayWisata;
    }

    public function displayWisata()
    {
        $wisata = wisata::all();
        return view('admin/adwisata', ["data"=>$wisata]);
    }

    public function addWisata()
    {
        return view('admin/tambahwisata');
    }
    
    public function createWisata(Request $request)
    {
        $wisata = wisata::create([
            'Nama' => $request->nama,
            'Kategori' => $request->kategori,
            'Keterangan' => $request->keterangan,
            'Benefit' => $request->benefit,
            'Harga' => $request->harga
        ]);
        return redirect('DashboardWisata');
    }

    public function updateWisata($id)
    {
        $wisata = wisata::where('id', $id)->get();
        return view('admin/editwisata', ['data' => $wisata]);
    }

    public function deleteWisata($id)
    {
        $wisata = wisata::find($id);
        $wisata->delete();
        return redirect('/DashboardWisata');
    }

    public function pickWisata($id)
    {
        $wisata = wisata::find($id);
        var_dump($wisata);
    }


}
