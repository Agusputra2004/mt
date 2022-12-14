<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use App\User;
use Auth;
use Alert;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

        return view('history.index', compact('pesanan'));
    }

    public function detail($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        return view('history.detail', compact('pesanan','pesanan_detail'));
        
    }
}
