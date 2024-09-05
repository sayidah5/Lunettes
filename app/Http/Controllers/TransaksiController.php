<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi(Request $request){
        $data['transaksi']=Products::find($request->id);
        return view('transaksi',$data);
    }
    // public function buy(Request $request , $id_produk){
    //     $produk = Products::find
    // }
}
