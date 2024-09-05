<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>
    <style>
        .hero {
            background-color: #91ccd6;
            color: white;
            padding: 60px 0;
            background-image: url('your-image-url-here');
            background-size: cover;
            background-position: center;
        }
        .hero-content {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }
        .hero img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="display-4" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-style: italic;'"> Lunettes Store</h1>
                <p class="lead">Find the best sunglasses and eyewear for you.</p>
                <a href="categories" class="btn btn-outline-light btn-lg"> Categories</a>
            </div>
        </div>
    </section>
    <section>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2024/05/11/03/01/woman-8753915_960_720.jpg"class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2024/05/11/03/01/woman-8753919_960_720.jpg" class="d-block w-100" alt="Slide 2">
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2024/05/11/03/01/woman-8753915_960_720.jpg" class="d-block w-100" alt="Slide 3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <div class="col-md-30">
        <h2 class="text-center text-dark py-5">Rekomendasi</h>
            @foreach ($produk as $key => $item)
            <div class="container mt-5 ">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{asset('/storage/foto/'.$item->foto)}}" class="card-img-top"  alt="Product Image">
                            <div class="card-body text-center">
                                <h4 class="text-dark" style="font-size: small; margin-left: 2%; margin-top: 5%;">{{$item->nama_produk}}</h4>
                                <h5 class="card-title">{{ number_format($item->price, 2, ',',',')}}</h5>
                                <a href="/detailproduk/{{$item->id}}" class="btn" style="background-color:#91ccd6;">Beli Sekarang</a>

                            </div>
                        </div>
                    </div>
                 </div>
            @endforeach
            </div>
            {{-- <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3" style="margin-left: 25%; margin-top: -45.5%;">
                        <div class="card">
                            <img src="https://www.charleskeith.co.id/dw/image/v2/BCWJ_PRD/on/demandware.static/-/Sites-id-products/default/dw5acb43bd/images/hi-res/2024-L6-CK3-41280581-57-1.jpg?sw=756&sh=1008" class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h4 class="text-dark" style="font-size: small; margin-left: 2%; margin-top: 5%;">Kacamata Cateye diamond Frame-Silver</h4>
                                <h5 class="card-title">IDR 250.000</h5>
                                <a href="/detailproduk" class="btn" style="background-color:#91ccd6;">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div> --}}
            {{-- <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3" style="margin-left: 50%; margin-top: -49%;">
                        <div class="card">
                            <img src="https://www.charleskeith.co.id/dw/image/v2/BCWJ_PRD/on/demandware.static/-/Sites-id-products/default/dwdd43acb8/images/hi-res/2024-L3-CK3-71280571-34-1.jpg?sw=756&sh=1008" class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h4 class="text-dark" style="font-size: small; margin-left: 2%; margin-top: 5%;">Kacamata Round chocorange Cateye T-shell</h4>
                                <h5 class="card-title">IDR 250.000</h5>
                                <a href="/detailproduk" class="btn" style="background-color:#91ccd6;">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3" style="margin-left: 75%; margin-top: -52.5%;">
                        <div class="card">
                            <img src="https://www.charleskeith.co.id/dw/image/v2/BCWJ_PRD/on/demandware.static/-/Sites-id-products/default/dw48cb4097/images/hi-res/2024-L6-SL3-51280578-04-1.jpg?sw=756&sh=1008" class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h4 class="text-dark" style="font-size: small; margin-left: 2%; margin-top: 5%;">Recycled Multicoloured-Frame Butterfly</h4>
                                <h5 class="card-title">IDR 250.000</h5>
                                <a href="/detailproduk" class="btn" style="background-color:#91ccd6;">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3" style="margin-top: -12%;">
                        <div class="card">
                            <img src="https://www.charleskeith.co.id/dw/image/v2/BCWJ_PRD/on/demandware.static/-/Sites-id-products/default/dwd42b2a42/images/hi-res/2024-L3-CK3-71280563-24-1.jpg?sw=756&sh=1008" class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h4 class="text-dark" style="font-size: small; margin-left: 2%; margin-top: 5%;">Kacamata Butterfly  Multicoloured-Frame</h4>
                                <h5 class="card-title">IDR 250.000</h5>
                                <a href="/detailproduk" class="btn" style="background-color:#91ccd6;">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3" style="margin-left: 25%; margin-top: -45.5%;">
                        <div class="card">
                            <img src="https://www.charleskeith.co.id/dw/image/v2/BCWJ_PRD/on/demandware.static/-/Sites-id-products/default/dwa85d2316/images/hi-res/2024-L6-CK3-91280576-34-1.jpg?sw=756&sh=1008" class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h4 class="text-dark" style="font-size: small; margin-left: 2%; margin-top: 5%;">Kacamata Butterfly Double-Frame Cut-Black</h4>
                                <h5 class="card-title">IDR 250.000</h5>
                                <a href="/detailproduk" class="btn" style="background-color:#91ccd6;">Beli Sekarang</a>
                            </div>

                        </div>
                    </div>
                 </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                     <div class="col-md-3" style="margin-left: 50%; margin-top: -49.3%;">
                         <div class="card">
                            <a href="/detailproduk"></a>
                            <img src="https://www.charleskeith.co.id/dw/image/v2/BCWJ_PRD/on/demandware.static/-/Sites-id-products/default/dw8a675350/images/hi-res/2024-L2-CK3-71280559-56-1.jpg?sw=756&sh=1008" class="card-img-top" alt="Product Image">
                              <div class="card-body text-center">
                                  <h4 class="text-dark" style="font-size: small; margin-left: 2%; margin-top: 5%;">Kacamata Butterfly Twisted Metalic - Peach</h4>
                                  <h5 class="card-title">IDR 250.000</h5>
                                  <a href="/detailproduk" class="btn" style="background-color:#91ccd6;">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <div class="container mt-5">
            <div class="row">
                <div class="col-md-3" style="margin-left: 75%; margin-top: -53%;">
                    <div class="card">
                        <img src="https://www.charleskeith.co.id/dw/image/v2/BCWJ_PRD/on/demandware.static/-/Sites-id-products/default/dwbe0517d6/images/hi-res/2022-L7-CK3-71280511-09-1.jpg?sw=756&sh=1008" class="card-img-top" alt="Product Image">
                        <div class="card-body text-center">
                            <h4 class="text-dark" style="font-size: small; margin-left: 2%; margin-top: 5%;">Recycled Acetate Multicoloured-Frame</h4>
                            <h5 class="card-title">IDR 250.000</h5>
                            <a href="/detailproduk" class="btn" style="background-color:#91ccd6;">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
             </div>
        </div> --}}
        <section class="footer" style="background-color: #91ccd6; height: 100%;" >
            <div class="container d-flex">
                <div class="footer-content ">

        </section>
    </div>

        <footer>
                <div style="height: 60vh; width:133%; background-color: #91ccd6; margin-bottom: -10%; margin-left: -20%">
                    <p style="margin-left: -60%; color: white; font-size: 20px; padding-top: 50px;">Produk Kami</p>
                    <p style="margin-left: -60%; color: white; font-size: 15px;"> Kacamata Cateye</p>
                    <p style="margin-left: -60%; color: white; font-size: 15px;"> Kacamata Butterfly</p>
                    <p style="margin-left: -5%; color: white; font-size: 20px; padding-top: -4%; margin-top: -6.5%;">Tentang Kami</p>
                    <p style="margin-left: -5%; color: white; font-size: 15px;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Enim soluta magni nihil hic sint quo modi voluptatum cumque deserunt. <br>
                        Ipsam error, mollitia delectus magni <br> numquam hic ullam eveniet itaque voluptate?</p>
                    <p style="margin-left: 60%; color: white; font-size: 20px; padding-top: -4%; margin-top: -8%;">Contact</p>
                    <p style="margin-left: 60%; color: white; font-size: 15px;">logo-logo</p>

                        <div class="text-white text-center" style="margin-top: 10%;">
                            <small>
                                &copy copyright by sayidah 2024
                            </small>
                        </div>
                </div>
        </footer>
     <script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
</body>
</html>
