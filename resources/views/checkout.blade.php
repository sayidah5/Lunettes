<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <!-- Formulir Pengisian Data -->
            <div class="col-md-6">
                <h3>Alamat Penagihan</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" placeholder="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="city" placeholder="kota">
                    </div>
                    <div class="mb-3">
                        <label for="negara" class="form-label">Negara</label>
                        <input type="text" class="form-control" id="state" placeholder="negara">
                    </div>
                    <div class="mb-3">
                        <label for="zip" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="zip" placeholder="kode pos">
                    </div>
                    <h4>Rincian</h4>
                    <div class="mb-3">
                        <label for="zip">Metode Pembayaran</label>
                        <select name="zip" id="zip">
                            <option value="dana">DANA</option>
                            <option value="cod">COD</option>
                            <option value="gopay">GOPAY</option>
                        </select>
                        {{-- <label for="zip" class="form-label">rincian</label>
                        <input type="text" class="form-control" id="zip" placeholder="rincian"> --}}
                    </div>
                </form>
            </div>

            <!-- Ringkasan Pesanan -->
            {{-- <div class="col-md-6">
                <h3>Your Order</h3>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$25</strong>
                    </li>
                </ul>

                <!-- Metode Pembayaran -->
                <h4>Payment</h4>
                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                    <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Full name as displayed on card</small>
                    </div>

                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-expiration" class="form-label">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    </div>
                </div> --}}

                <!-- Tombol Submit -->
                <hr class="my-4">
                <button class="btn" style="background-color:#91ccd6; " type="submit">Pesan Sekarang</button>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href={{asset("assets/bootstrap/css/bootstrap.min.css")}}>
</body>

</html>
