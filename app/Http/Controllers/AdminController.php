<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pesanan;

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
    public function uploadForm(Request $request)
    {
        # code...
        $form = new pesanan;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('form',$imagename);
        // $request->file->move('vaccineimage', $imagename);
        $form->Nama = $request->nama;
        $form->Email = $request->email;
        $form->HP = $request->number;
        $form->Paket = $request->paket;
        $form->TanggalPesanan = $request->tanggal;
        $form->JumlahOrang = $request->jumlah;
        $form->MetodePembayaran = $request->bayar;
        $form->image=$imagename;
        $form->save();
        return redirect()->back();
    }
}
