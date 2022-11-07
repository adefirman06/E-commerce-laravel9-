<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        thead {
            background-color: white;
            margin: auto;
        }

        th {
            color: black;
        }

        td {
            background-color: black;
            color: white;
        }

        .img1 {
            width: 50px;
        }
    </style>
</head>

<body>
    <div class="container-scroller" style="margin: auto;">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')

        <!-- partial -->
        <div class=" main-panel" style="margin: auto;">
            <div class="content-wrapper" style="margin: auto;">
                <h1 style="margin: auto; text-align: center; font-size: 37px; padding-bottom: 50px; font-weight: bold;"> Daftar Orderan</h1>

                <div style="margin: auto; padding-left: 700px; padding-bottom: 20px;">


                    <form action="{{url('search')}}" method="get">

                        @csrf

                        <input type="text" style="color: black;" name="search" placeholder="Cari Sesuatu">
                        <input type="submit" value="cari" class="btn btn-outline-primary">

                    </form>

                </div>

                <table class="table table-bordered" style="margin: auto;">

                    <thead>
                        <th style="color: black;">Nama</th>
                        <th style="color: black;">Email</th>
                        <th style="color: black;">Alamat</th>
                        <th style="color: black;">Telepon</th>
                        <th style="color: black;">Produk</th>
                        <th style="color: black;">Jumlah</th>
                        <th style="color: black;">Harga</th>
                        <th style="color: black;">Status Pembayaran</th>
                        <th style="color: black;">Status Pengiriman</th>
                        <th style="color: black;">Gambar</th>
                        <th style="color: black;">Kirim</th>
                        <th style="color: black;">Print</th>
                    </thead>

                    @forelse ($order as $order)

                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img class="img1" src="/product/{{$order->image}}">
                        </td>

                        <td>

                            @if($order->delivery_status=='Proses')

                            <a href="{{ url('delivered',$order->id)}}" onclick="return confirm('Yakin sudah terkirim ?')" class="btn btn-primary">Mengirim</a>

                            @else

                            <p style="color: white;">Terkirim</p>


                            @endif

                        </td>

                        <td>
                            <a href="{{ url('/print_pdf',$order->id)}}" class="btn btn-secondary">Print pdf</a>
                        </td>


                    </tr>
                    @empty
                    <tr>

                        <td colspan="16" style="text-align: center; font-size:larger"> 
                            <p>Tidak Ada Data</p>
                        </td>
                    </tr>
                    @endforelse

                </table>
            </div>
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        <!-- End custom js for this page -->
        @include('admin.js')
    </div>
</body>

</html>