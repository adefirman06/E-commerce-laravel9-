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
            margin: ;
            padding: 50px;
            text-align: center;
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


        <h1 class="font1"> Daftar Pemesanan</h1>
        <table class="table table-bordered">
            <br>
            <thead>

                <th>Nama Produk</th>
                <th>Jumlah Produk</th>
                <th>Harga</th>
                <th>Status Pembayaran</th>
                <th>Status Pengiriman</th>
                <th>Image</th>
                <th>Batal</th>

            </thead>

            @foreach ($order as $order)
                <tr>
                    <td>{{ $order->product_title }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>@currency($order->price)</td>
                    <td>{{ $order->payment_status }}</td>
                    <td>{{ $order->delivery_status }}</td>
                    <td>
                        <img src="product/{{$order->image}}" width="70px">
                    </td>


                    <td>

                        @if($order->delivery_status=='Proses')
                            
                        
                        <a onclick="return confirm('yakin mau di batalkan ?')" href="{{ url('cancel_order',$order->id)}}" class="btn btn-danger">Batalkan Pemesanan</a>
                        
                        @else

                        <p style="color: blue">Selesai</p>

                        @endif
                    </td>
                </tr>
                @endforeach

        </table>
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
