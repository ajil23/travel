<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::latest()->paginate();
        return view('pemesanan.view_pemesanan', compact('pemesanan'));
    }

    public function add(){
        $paket = Paket::all();
        return view('pemesanan.add_pemesanan', compact('paket'));
    }

    public function store(Request $request){
        $pemesanan = new Pemesanan();
        $pemesanan->paket_id = $request->paket_id;
        $pemesanan->nama = $request->nama;
        $pemesanan->qty = $request->qty;
        $pemesanan->telepon = $request->telepon;
        $pemesanan->email = $request->email;
        $pemesanan->total = $request->total;
        $pemesanan->pembayaran = $request->pembayaran;
        $pemesanan->save();
        Alert::success('Berhasil', 'Pesanan mu sudah dibuat');
        return redirect()->back();
    }

    public function delete($id){
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();
        return redirect()->route('view.pemesanan');
    }
}
