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

    <link rel="shortcut icon" href="images/favicon.jpeg" type="">
    <title>Onlineku - toko online masa kini</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style type="text/css">
        .font1 {
            margin: auto;
            font-size: 50px;
        }

        .font2 {
            margin: auto;
            font-size: 25px;
            padding: 20px;
        }

        .font3 {
            margin: auto;

            font-size: 20px;
            padding: 20px;
        }

        .center {
            text-align: center;
            padding: 40px;
        }

        thead,
        th {
            background-color: grey;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- ?/header -->
        @include('home.header')
        <!-- slider section -->
        @if(session()->has('message'))

        <div class="alert alert-secondary" role="alert" style="font-size: 20px; text-align: center;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              {{ session()->get('message') }}   <a href="{{ url('show_order')}}" class="alert-link">. Ke Halaman Pemesanan</a>.
                  
       

        </div>
        @endif

        <br>
        <h1 class="font1"> Keranjang Belanja</h1>
        <table class="table table-bordered">
            <br>
            <thead>

                <th>Nama Produk</th>
                <th>Jumlah Produk</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>

            </thead>

            <?php $totalprice = 0; ?>

            @foreach ($cart as $cart)

            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>@currency($cart->price)</td>
                <td><img src="/product/{{$cart->image}}" width="70px"></td>
                <td>
                    <a href="{{url('/remove_cart',$cart->id)}}" onclick="return confirm('Yakin mau di Hapus?')" class="btn btn-danger btn-md">Hapus</a>
                </td>


            </tr>

            <?php $totalprice = $totalprice + $cart->price ?>

            @endforeach



        </table>
        <div class="font2">
            <h1>Total Harga : @currency($totalprice)</h1>
        </div>

        <div class="center">

            <h1 class="font3">Metode Pembelanjaan</h1>

            <a href="{{url('cash_order')}}" class="btn btn-danger">Bayar di Tempat</a>
            <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Bayar lewat Kartu</a>

        </div>

    </div>

    <!-- end slider section -->
    </div>
    <!-- why section -->

    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">TKJ27s</a><br>

            Distributed By <a href="https://KELOMPOK 3.com/" target="_blank">KELOMPOK 3</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>