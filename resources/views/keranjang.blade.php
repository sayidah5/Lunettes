<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Cart</title>
    <link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>

</head>
<body style="overflow-x: hidden;">
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
                    <a href="Categories" class="ms-4">Kategori</a>
                    <head>
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
                    </head>
                <i class="fas fa-shopping-cart"></i>
            </a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
</nav>
<h4 class="mb-4" style="margin-left: 45%; margin-top:3%;">Keranjang Anda</h4>
<div class="container mt-5" style="margin-left: 12%">
    @foreach ($keranjang as $item )
        <div class="row">
            <div class="col-md-8">
                <!-- Daftar Produk -->
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('storage/foto/'.$item->produk->foto)}}" class="img-fluid rounded-start" alt="Product 1">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->produk->nama_produk}}</h5>
                                <p class="card-text">{{$item->produk->nama_produk}}</p>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label for="quantity1" class="form-label">Total</label>
                                        <input type="number" id="quantity1" class="form-control w-25" value="1" min="1">
                                    </div>
                                    <p class="card-text"><strong>Rp. {{$item->produk->harga}} </strong></p>
                                </div>
                                <a href="/delete-keranjang" class="btn btn-danger mt-2">{{$item->id}}</a>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.charleskeith.co.id/dw/image/v2/BCWJ_PRD/on/demandware.static/-/Sites-id-products/default/dwd42b2a42/images/hi-res/2024-L3-CK3-71280563-24-1.jpg?sw=756&sh=1008" class="img-fluid rounded-start" alt="Product 2">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Kacamata Butterfly</h5>
                                <p class="card-text">Recycled Acetate Multicoloured-Frame Butterfly Sunglasses - Multi</p>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label for="quantity2" class="form-label">Total</label>
                                        <input type="number" id="quantity2" class="form-control w-25" value="2" min="1">
                                    </div>
                                    <p class="card-text"><strong>Rp. 1.500.000</strong></p>
                                </div>
                                <a href="#" class="btn btn-danger mt-2">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


        @endforeach

    </div>

    <script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
</body>

</html>
