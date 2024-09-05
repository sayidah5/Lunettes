@extends('template')
@section('content')

<div class="container pt-5">
    @if (Session::has('pesan'))
        <div class="alert">{{Session::get('pesan')}}</div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <a href="/user/create" class="btn btn-primary" style="background-color: #91ccd6; color:black" >Tambah Data</a><br>
        </div>
        <div class="col-md-6">
            <form action="/search" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="cari" class="form-control" placeholder="Search">
                    <button class="btn btn-success" type="submit" style="background-color: #91ccd6; color:black">Go</button>
                </div>
            </form>
        </div>
    </div>
    Total Data Produk: {{$total}}
    <table class="table" style="background-color: #91ccd6">
        <thead class="table-primary" style="background-color: #91ccd6">
            <tr>
                <th>NO</th>
                <th>PRODUK</th>
                <th>KATEGORI</th>
                <th>Deskripsi</th>
                <th>STOK</th>
                <th>HARGA</th>
                <th>FOTO</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                {{-- <td>{{$item->category}}</td> --}}
                {{-- <td>{{$item->stock}}</td>
                <td>{{$item->price}}</td> --}}
                <td><img src="{{ asset('storage/foto/'.$item->photo) }}" alt="" style="width: 50px; height: 50px"></td>
                <td>
                    <a href="/user/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn" style="background-color: #91ccd6">Hapus</a>
                    <a href="/user/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
@endsection
