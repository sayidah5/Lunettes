<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk E-Commerce</title>
    <link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>
</head>
<body>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    }

    .navbar {
    background-color: #91ccd6;;
    padding: 40px 0;
    }

    .container {
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

    .logo {
    color: #fff;
    text-decoration: none;
    font-size: 24px;
    }

    .nav-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    }

    .nav-links li {
    margin: 0 15px;

    }

    .nav-links a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;

    }

    .nav-links a:hover {
    text-decoration: underline;

    }
    </style>
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo" style="font-family:  Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-style: italic; margin-left: 10%; font-size: 40px;">Lunettes</a>
            <ul class="nav-links">
                <li><a href="/home">home</a></li>
                <li><a href="#">
                    Produk
                <a href="kategori" class="ms-4">Kategori</a>
                <head>
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
                </head>
                <i class="fas fa-shopping-cart"></i>
            </a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </nav>
    {{-- <div class="container-fluid" style="height:100vh; background-color: #91ccd6;"> --}}
        {{-- <h5 class="text-center; margin-top" style="margin-top: 20">DETAIL PRODUK</h5> --}}

        <div class="container">
            <div class="row">
                <!-- Gambar Produk -->
                <div class="col-md-6" style="margin-top: 15%">
                    <img src="{{asset('/storage/foto/'.$produk->foto)}}" class="img-fluid" alt="Gambar Produk" style="width: 50%; height:90%; margin-left: 30%">
                </div>
                <!-- Detail Produk -->
                <div class="col-md-6" style="margin-top: 15%; margin-left: -3%">
                    <h2>{{$produk->nama_produk}}</h2>
                    <p class="text-muted">Kategori : {{$produk->category}}</p>
                    {{-- <p>Rp.{{number_format($produk->harga, 2, ',','.') }}</p> --}}
                    <p>Rp. {{ number_format($produk->price, 2, ',',',')}}</p>
                    <p>{{$produk->deskripsi}}</p>

                    {{-- <h5>Spesifikasi:</h5>
                    <ul>
                        <li>Warna: Black chocolate</li>
                        <li>Ukuran: 15 inci</li>
                        <li>Berat: 20 gram</li>

                    </ul> --}}
                    {{-- <div class="jumlah">
                        <label for="jumlah">Jumlah</label>
                        <div class="input-group">
                            <button class="btn-minus">-</button>
                            <input type="number" id="jumlah" name="jumlah" value="1" min="1" max="99">
                            <button class="btn-plus">+</button>
                        </div>

                    </div> --}}
                    <div class="mb-4">
                        <label for="quantity" class="form-label">Jumlah</label>
                        <input type="number" id="quantity" class="form-control w-25" value="1" min="1" max="99">
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-primary btn-lg"><a href="/keranjang/{{$produk->id}}" style="color: black"> Tambah ke Keranjang</a></button>
                        <button class="btn btn-outline-secondary btn-lg"><a href="/checkout" style="color: black"> Beli sekarang</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
</body>
</html>
