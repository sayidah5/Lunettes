@extends('template')
@section('content')
    
    {{-- <nav class="navbar navbar-expand-sm" style="background-color: #91ccd6;"> --}}
        <div class="container-fluid">
            <a href="#" class="navbar-brand" style="font-style: italic; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: white; margin-left: 8%;">Lunettes</a>
            <!-- <a href="#" class="navbar-brand">Lunettes</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="" class="nav-link" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" style="color: white;">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="color: white;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center text-white" style="background-color: #91ccd6;;">
                    Tambah Produk
                </div>
                <div class="card-body">
                    <form action="/user/edit/{{$user->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group pt-2">
                            <label for="Username">Nama User</label>
                            <input type="text" class="form-control" id="Username" placeholder="Masukkan nama user"
                              name="Username" value="{{$user->username}}">
                        </div>
                        <div class="form-group pt-2">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan email"
                              name="email" value="{{$user->email}}">
                        </div>

                        {{-- <div class="form-group pt-2">
                            <label for="category">Kategori</label>
                            <select name="category" id="category">
                                <option value="kacamata cateye">kacamata cateye</option>
                                <option value="kacamata butterfly">kacamata butterfly</option>
                            </select>
                        </div>
                        <div class="form-group pt-2">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" id="price" placeholder="Masukkan harga produk" 
                             name="price" value="{{$user->price}}">
                        </div>
                        <div class="form-group pt-2">
                            <label for="stock">Jumlah</label>
                            <input type="number" class="form-control" id="stock" placeholder="Masukkan jumlah produk"
                             name="stock" value="{{$user->stock}}">
                            
                        </div>
                        <div class="form-group pt-2">
                            <label for="description">Deskripsi</label>
                            <input type="text" class="form-control" id="description" placeholder="Masukkan jumlah produk"
                             name="description" name="{{$user->description}}">
                        </div>
                        <div class="form-group pt-2">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control-file" name="foto" id="image">
                        </div> --}}
                        <button type="submit" class="btn w-100 btn-block mt-5 text-white" style="background-color: #91ccd6;">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="bootstrap-5.3.2-dist/js/bootstrap.min.js">

@endsection