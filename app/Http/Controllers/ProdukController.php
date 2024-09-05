<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Produk;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    //
    public function show(){
        $data['produk'] = Products::all();
        $data['total'] = Products::count();
        return view('/produk',$data);
    }
    public function search(Request $request){
        $data['produk'] = Products::where('name',$request->cari)->orWhere('category',$request->cari)->get();
        $data['total'] = $data['produk']->count();

        return view('/index',$data);
    }
    public function create(){
        return view('produkcreate');
    }

    public function add(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'foto' => 'image'
        ]);
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request -> file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }else{
            $fileName = '';
        }
        $produk = Products::create([
            'id_user' => Auth::user()->id,
            'nama_produk' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
            'description'=>$request->description,
            'foto' => $fileName
        ]);
        if($produk){
            Session::flash('pesan','Data berhasil ditambahkan');
        }else{
            Session::flash('pesan','Data gagal ditambahkan');
        }

        return redirect('/index');
    }

    public function edit(Request $request){
        $data['produk'] = Products::all();
        $data['produk'] = Products::find($request->id);
        return view('/produkedit',$data);
    }

    public function delete(Request $request)
    {
        $produk = Products::find($request->id);
        $delete = Products::where('id', $request->id)->delete();
        if ($delete) {
            if($produk->foto) {
                Storage::delete('foto/' .$produk->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        }else{
            Session::flash('pesan', 'Data gagal dihapus');
        }
        return redirect('/index');
    }

    public function update(Request $request){
        $produk = Products::find($request->id);

        // Storage::delete($produk->foto);

        $fileName = '';
        if($request->file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }

        // $update =
        $update = Products::where('id',$request->id)->update([
            'nama_produk' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'stock' => $request->stock,
            'description'=>$request->description,
            'foto' => $fileName
        ]);
        if($update){
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('/index');
    }
}
