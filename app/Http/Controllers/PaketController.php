<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PaketController extends Controller
{
    public function index(){
        $paket = Paket::all();
        return view('paket.view_paket', compact('paket'));
    }

    public function add(){
        return view('paket.add_paket');
    }

    public function store(Request $request){
        $paket = new Paket();
        $paket->nama = $request->nama;
        $paket->destinasi = $request->destinasi;
        $paket->harga = $request->harga;
        $paket->rating = $request->rating;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            ]);
            $paketImage = $request->file('image')->store('image');
            $paket->image = $paketImage;
        }
        $paket->save();
        Alert::success('Berhasil', 'Tambah paket berhasil');
        return redirect()->route('view.paket');
    }

    public function edit($id){
        $editpaket = Paket::find($id);
        return view('paket.update_paket', compact('editpaket'));
    }

    public function update(Request $request, $id){
        $paket = Paket::find($id);
        $paket->nama = $request->nama;
        $paket->destinasi = $request->destinasi;
        $paket->harga = $request->harga;
        $paket->rating = $request->rating;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            ]);
            Storage::delete($paket->image);
            $paketImage = $request->file('image')->store('image');
            $paket->image = $paketImage;
        }
        $paket->update();
        Alert::success('Berhasil', 'Data berhasil diubah');
        return redirect()->route('view.paket');
    }

    public function delete($id){
        $deletepaket = Paket::find($id);
        $deletepaket->delete();
        return redirect()->route('view.paket');
    }
}
