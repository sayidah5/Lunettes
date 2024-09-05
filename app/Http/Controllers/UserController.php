<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('/login');
    }
    // public function loginuser(){
    //     return view('loginuser');
    // }
    // public function authuser(Request $request){
    //     $validasi = $request->validate(rules:[
    //         'email'=>['required'],
    //         'password'=>['required']
    //     ]);
    //     if(Auth::attempt($validasi)){
    //         return redirect('/home');
    //     }else{
    //         return back()->withErrors([
    //             'email'=>'maaf, email anda salah',
    //         ]);
    //     }
    //     return redirect()->back()->with('pesan','mohon maaf login anda gagal');
    // }
    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email'=>['required'],
            'password'=>['required']
        ]);
        if(Auth::attempt($validasi)){
            return redirect('/index');
        }else{
            return back()->withErrors([
                'email'=>'maaf, email anda salah',
            ]);
        }
        return redirect()->back()->with('pesan','mohon maaf login anda gagal');
    }
    // public function tampilan(){
    //     return view('tampilan');
    // }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function index(){
        $data['produk'] = Products::all();
        return view('home',$data);
    }

    public function showindex(){
        $data['produk'] = Products::all();
        $data['total'] = Products::count();
        return view('index',$data);
    }
    public function categories(){
        return view('categories');
    }
    public function checkout(){
        return view('checkout');
    }
    public function keranjang(){
        return view('keranjang');
    }

    // public function show(){
    //     $data['user'] = User::all();
    //     $data['user'] = User::count();
    //     return view('/user',$data);
        // $data['user']
        // return view('/user',$data);
    // }

    public function search(Request $request){
        $data['produk'] = Products::where('name','LIKE','%'.$request->cari.'%')->get();
        $data['total'] = $data['produk']->count();

        return view('/index',$data);
    }
    // public function opsilogin()
    // {
    //     return view('login');
    // }
    // public function detailproduk()
    // {
    //     return view('detailproduk');
    // }
    public function detailproduk($id){
        $data['produk'] = Products::where('id',$id)->first();
        return view('detailproduk',$data);
    }
    function showproduk(){
        $data['produk'] = Products::all();
        $data['keranjang'] = Keranjang::all();
        return view('/keranjang',$data);
    }
    function detail(){

    }



}


?>
