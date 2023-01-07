<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use PDF;

class BarangController extends Controller
{
    public function index()
    {
        //Ambil Barang
        $barangs = Barang::all();

        return view('barang.form_barang', compact('barangs'));
    }

    public function create()
    {

        //  Menampilkan file tambah.blade.php       
        return view('barang.tambah_barang');
    }

    public function store(Request $req){
       
        $this->validate($req, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                "kode"=> 'required',
                "nama"=> 'required',
                "merek"=> 'required',
                "jenis"=> 'required',
                "kerusakan"=> 'required'
        ]);

        $image = $req->file('image');
        $image->storeAs('image', 'image');

        Barang::create(
            [
                "kode"=>$req->kode,
                "nama"=>$req->nama,
                "merek"=>$req->merek,
                "jenis"=>$req->jenis,
                "kerusakan"=>$req->kerusakan,
                "image"=>$image,
            ]
        );
        return redirect('barang.index');
    }

    // Proses Edit
    public function edit($id){
        $barangs = Barang::where("id","=",$id)->first();
        return view('barang.edit_barang', compact('barangs'));
    }

    public function update(Request $req, $id){
        $barangs = Barang::where("id","=",$id)->first();
        $barangs->id = $id;
        $barangs->nama = $req->nama;
        $barangs->jumlah = $req->jumlah;
        $barangs->harga = $req->harga;
        $barangs->ket = $req->ket;
        $barangs->save();

        return redirect('/barang');

    }

    public function destroy($id){
        Barang::where("id","=",$id)->first()->delete();

        return redirect('/barang');
    }
}
