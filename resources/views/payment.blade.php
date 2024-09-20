<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    FP
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            TC GACOAN
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="canteen">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="checkout">Check Out</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="login">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <section class="test">
        <h1 style="text-align:center">Data Pemesan</h1>
    </section>
    <div style="
            background-color: #f8f9fa; /* Warna latar belakang solid */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 500px; /* Atur lebar form */
            margin: 50px auto; /* Posisi form di tengah */
        ">
        <form method="POST" action="{{ url('/checkout/payments') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="nomor_telp">Nomor Telepon</label>
                <input type="text" name="nomor_telp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nomor_meja">Nomor Meja</label>
                <input type="number" name="nomor_meja" class="form-control" required>
            </div>
            <div class="form-group">
                    <label for="menu">Pilih Menu</label>
                    <select name="menu" class="form-control" required>
                        @foreach($menus as $menu)
                            <option value="{{ $menu->id }}">{{ $menu->name }} - ${{ number_format($menu->price, 0, ',', '.') }}
                            </option>
                        @endforeach
                    </select>
                </div>
            <div>
                <label for="payment_method">Metode Pembayaran</label>
                <select name="payment_method" class="form-control" required>
                    <option value="cash">Cash</option>
                    <option value="qris">QRIS</option>
                </select>
            </div>
            <div style="text-align:right">
                <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
        </form>
    </div>

    
  <!-- end info section -->


  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="assets/js/custom.js"></script>

</body>

</html>