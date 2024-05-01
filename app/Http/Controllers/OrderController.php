<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;
use App\Models\User;

class OrderController extends Controller
{
    public function order()
    {
        return view('frontend.order');
    }

    public function pesan(Request $request)
    {
        try {
            // Simpan data pesanan ke database
            $simpan = new Pesanan;
            $simpan->nama = $request->nama;
            $simpan->hp = $request->hp;
            $simpan->email = $request->email;
            $simpan->provinsi = $request->provinsi;
            $simpan->kota = $request->kota;
            $simpan->kecamatan = $request->kecamatan;
            $simpan->alamat = $request->alamat;
            $simpan->kode = $request->kode;
            $simpan->ukuran = $request->ukuran;
            $simpan->jenis = $request->jenis;
            $simpan->gambar = $request->gambar;
            $simpan->tambahan = $request->tambahan;
            $simpan->save();

            return redirect('/pesanan')->with('success', 'Pesanan berhasil dibuat!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function showPesanan()
    {
        $getPesanan = Auth::user();
        $pesanan = Pesanan::where('email', $getPesanan->email)->get();
        //dd($getPesanan);
        return view('frontend.pesanan', compact('pesanan'));
    }
}
