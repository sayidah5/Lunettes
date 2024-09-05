<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categories</title>
        <link rel="stylesheet" href= {{ asset("assets/bootstrap/css/bootstrap.css") }} >

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
    <div class="categories">
        <h2 class="text-center text-dark py-5" style="margin-left:-70%; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-style: italic;'">Categories</h>

    </div>

    <script src={{asset("assets/bootstrap/js/bootstrap.min.js")}}></script>
</body>
</html>
