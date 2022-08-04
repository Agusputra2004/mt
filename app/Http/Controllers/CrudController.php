<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();

        return view('crud.index', compact('barangs'));        
    }

    public function create()
    {
        return view('crud.create');
    }

    public function edit($id)
    {
        $barang = Barang::where('id', $id)->first();
            
        return view('crud.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::where('id', $id)->first();
        $barang->id = $request->id;
        $barang->nama_barang = $request->nama_barang;
        $barang->gambar = $request->gambar;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->keterangan = $request->keterangan;
        $barang->update();

        return redirect('crud')->with(['success' => 'Data Barang Berhasil Diupdate']);
    }


    public function store(Request $request)
    {
        $barang = new Barang;
        $barang->id = $request->id;
        $barang->nama_barang = $request->nama_barang;
        $barang->gambar = $request->gambar;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->keterangan = $request->keterangan;
        $barang->save();

        return redirect('crud')->with(['success' => 'Data Barang Berhasil Disimpan']);
    }

    public function hapus($id)
    {
        $barang = Barang::where('id', $id)->first();
        $barang->delete();

        return redirect('crud')->with(['success' => 'Data Barang Berhasil Dihapus']);
    }
}